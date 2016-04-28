<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class loginAuthController extends Controller
{
	public function checkLogin(Requests\loginRequest $request){
    	$inputData = array(
    		'email' => $request->userName,
    		'password' => $request->password,
    	);
    	if(Auth::attempt($inputData)){
    		return redirect('/home');
    	}else{
    		return redirect('/')
    			->withErrors('wrong password');
    	}
	}

	public function logout(){
		Auth::logout();
		return redirect('/');
	}
}