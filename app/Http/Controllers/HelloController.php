<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller{
	public function index(){
		return view("hello");
	}

	public function artikel(){
		return view("artikel");
	}

	public function about(){
		return view("about");
	}
}