<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($name = "Mundo") {
	    return view('hello', ['n'=>$name]);
//    	return "Olá " . $name;
    }

    public function render(Request $request) {
    	return 'Hello ' . $request->input('name');
    }
}
