<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackController extends Controller
{
    // Show
    public function show($id){
        return view('pack.show');
    }
}
