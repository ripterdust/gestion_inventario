<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Lab_types;

class LabTypeController extends Controller
{
    public function index(){
        $count = Lab_types::all()->count();
        $laboratories = DB::table('lab_types')
        ->join('fields', 'lab_types.field_id', '=', 'fields.field_id')
        ->join('categories', 'lab_types.cat_id', '=', 'categories.id')
        ->select('lab_types.lab_name', 'categories.id', 'lab_types.lab_pc', 'categories.category')
        ->simplePaginate(4);
        
        $packCount = 1;
        return view('laboratory.index', [
            'count' => $count,
            'laboratories' => $laboratories,
            'packCount' => $packCount
        ]);
    }
}
