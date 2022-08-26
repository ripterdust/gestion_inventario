<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackController extends Controller
{
    public function index(){
        return view('pack.index');
    }
    // Show
    public function show($id){
        return view('pack.show');
    }
}
