<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class registerController extends Controller
{
    public function create(Requests\registerRequest $request)
	{
		
		\App\user::create([
			'first_name'=>$request->firstName,
			'last_name'=>$request->lastName,
			'email'=>$request->email,
			'password'=>bcrypt($request->password),
			'enabled'=>1,
			'type'=>'USER',
		]);

		return redirect('/');
	}
}
