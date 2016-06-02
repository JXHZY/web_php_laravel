<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
    	$people = ['Taylor', 'Matt', 'Jeffrey'];
		//pass value in 3 ways: way1
    	// return view('welcome',['people' => $people]);
    	//pass value in 3 ways: way2
    	return view('welcome',compact('people'));
    	//pass value in 3 ways: way3
    	// return view('welcome')->with('people',$people);
    }

    public function about(){
    	// return view('about');		//resources/views/about.blade.php
		return view('pages.about');		//resources/views/pages/about.blade.php, pages created by yourself
    }
}
