<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pack;
class PackController extends Controller
{
    public function index(){

        // Total of packs
        $count = Pack::select('name')->count();
        $packs = Pack::select('name', 'pack_id', 'description', 'price')
            ->orderBy('pack_id', 'desc')
            ->simplePaginate(4);
            
        return view('pack.index',[
            'count' => $count,
            'packs' => $packs
        ]);
    }
    // Show
    public function show($id){
        return view('pack.show');
    }
}
