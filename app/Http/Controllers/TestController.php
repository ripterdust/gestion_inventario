<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// PDF
use PDF;
// Models
use App\Models\Test;
use App\Models\Laboratory;
use App\Models\Category;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::orderByDesc('created_at')->simplePaginate(4);

        $count = Test::all()
            ->count();
        return view('dashboard.tests', [
            'tests' => $tests,
            'count' => $count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::select('category')
            ->get();
        $laboratories = Laboratory::select('name', 'category')
            ->get();

        return view('dashboard.tests.create', [
            "categories" => $categories,
            "laboratories" => $laboratories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "client" => 'required',
            "test" => 'required'
        ]);

        // Saving by model
        $test = new Test;
        $test->CLIName = $request->client;
        $test->TESTName = $request->test;
        $test->result = '{}';
        $test->save();
        
        return redirect('tests');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $test = Test::find($id);

        $pdf = PDF::loadView('dashboard.tests.pdf', ['results' => $test->result]);
        return view('dashboard.tests.pdf');
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::find($id)->first('TESTName');
        $laboratory = Laboratory::select('parameters')
            ->where('name', $test->TESTName)
            ->get();

        return view('dashboard.tests.edit', [
            'parameters' => $laboratory, 
            'test' => $test,
            'id' => $id
            ],
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = 1)
    {
        // Query
        $test = Test::find($id);

        // Getting data
        $keys = array_keys($request->toArray());
        $array = array();

        for ($i=0; $i < count($keys); $i++) { 
            $name = $keys[$i];
            if($name[0] != '_'){
                $array[$name] = $request[$name];
            }
        }
        
        $test->result = json_encode($array);
        $test->state = 0;
        $test->save();

        return redirect()->route('tests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
