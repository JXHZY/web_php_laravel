<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class sitesController extends Controller
{
	public function welcome(){
		return view('welcome');
	}

	public function login(){
		return view('todo.login');
	}

	public function register(){
		return view('todo.register');
	}
}
