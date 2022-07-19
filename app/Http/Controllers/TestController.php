<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// PDF
use PDF;
// Models
use App\Models\Test;
use App\Models\Lab_list;
use App\Models\Category;
use App\Models\Client;

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

        $categories = Category::select('id', 'category')
            ->get();
        // $laboratories = Lab_list::select('lab_name', 'cat_id')
        //     ->get();
        $laboratories = DB::table('lab_types')
        ->join('fields', 'lab_types.field_id', '=', 'fields.field_id')
        ->join('categories', 'lab_types.cat_id', '=', 'categories.id')
        ->select('lab_types.lab_name', 'categories.id', 'lab_types.lab_id')
        ->get();
        $clients = Client::select('name')
            ->get();

        return view('dashboard.tests.create', [
            "categories" => $categories,
            "laboratories" => $laboratories,
            "clients" => $clients
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
        $test->cat_id = $request->category;
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
        
        $results = json_decode($test->result, true);

        $keys = array_keys($results);

        $data = [
            'results' => $results,
            "keys" => $keys,
            "name" => $test->CLIName,
            "date" => $test->created_at,
            "test" => $test->TESTName
        ];
        
        $pdf = PDF::loadView('dashboard.tests.pdf', $data);
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

        $laboratory = DB::table('tests')
            ->select('tests.TESTName', 'fields.field_id', 'fields.field_pm', 'fields.field_rgmin', 'fields.field_rgmax', 'fields.field_tp')
            ->join('fields', 'tests.cat_id', '=', 'fields.cat_id')
            ->where('tests.id', '=', "$id")
            ->orderBy('tests.created_at', 'asc')
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
        $raw = $request->toArray();
        $params = array_splice($raw, 2, count($raw));

        $test->result = json_encode($params);
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
