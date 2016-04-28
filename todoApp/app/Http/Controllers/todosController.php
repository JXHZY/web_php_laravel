<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\todo as todo;
use App\User as user;


use Auth;
use Validator;

class todosController extends Controller
{
	public function __construct(){
    	$this->middleware('auth');
    }

    public function showTodos(){
    	$userInformation = user::where('id',Auth::id())->get()->toArray();
    	$userEmail = $userInformation[0]['email'];
    	$todos = todo::where('owner',$userEmail)->get();
    	return view('todo.home')->with('todos',$todos);
    }

    public function handleTodos(Request $request){
    	$userInformation = user::where('id',Auth::id())->get()->toArray();
    	$userEmail = $userInformation[0]['email'];
    	switch ($request->action) {
			case 'Add':
				$rules = array(
					'scheduledDate' => 'required',
					'description' => 'required',
				);
				$validator = Validator::make($request->all(),$rules);
				if($validator->fails()){
					return redirect('/home')
						->withErrors($validator);
				}
				todo::create([
					'owner'=> $userEmail,
					'description'=>$request->description,
					'scheduled_date'=>$request->scheduledDate,
					'status'=>'Not Started',
					]);
				return redirect('/home');
				break;
			case 'Edit':
				$todo = todo::where('id',$request->todoId)->get()->toArray();
    			return view('todo.update')->with('todo',$todo);
				break;
			case 'Update':
				$task = [];
				switch ($request->status) {
					case '0':
						$task['status'] = 'Not Started';
						break;
					case '1':
						$task['status'] = 'Started';
						break;
					case '2':
						$task['status'] = 'Mid-Way';
						break;
					case '3':
						$task['status'] = 'Completed';
						break;
				}
				todo::find($request->id)->update(['status'=>$task['status'],'description'=>$request->description]);
				return redirect('/home');
				break;

			case 'Delete':
				todo::find($request->todoId)->delete();
				return redirect('/home');
				break;
		}
    }
}
