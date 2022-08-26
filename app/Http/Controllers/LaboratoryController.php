<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// **** Query builder
use Illuminate\Support\Facades\DB;
// **** Models

// Laboratory
use App\Models\Laboratory;

// Packs
use App\Models\Pack;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $count = Laboratory::all()
            ->count();

        $laboratories = DB::table('laboratories')
            ->leftJoin('categories', 'laboratories.category' , '=', 'categories.id')
            ->select('laboratories.name', 'price', 'categories.category as category')
            ->simplePaginate(4);
        
        $packs = Pack::select('pack_id', 'name', 'price', 'description')
            ->orderBy('pack_id','desc')
            ->limit(4)
            ->get();

        return view('laboratory.index', [
            'count' => $count,
            'laboratories' => $laboratories,
            'packs' => $packs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
