<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Sample1：router
//browser type: "/hello/ying"
Route::get('hello/{name}', function ($name) {
	echo 'Hello '.$name;
});

//Sample2: post,get,put for router
//Create an item
Route::post('test',function(){
	echo 'POST';
});

//Read an item
Route::get('test',function(){
	echo '<form method="POST" action="test">';
	echo Form::text('username');
	echo Form::label('email', 'E-Mail Address');
	echo '<input type="submit">';
	echo '<input type="hidden" value="PUT" name="_method">';
	echo '</form>';
});

Route::put('test',function(){
	echo 'PUT';
});

// Sample3:database->model->router
Route::get('customer',function(){
	$customer = App\Customer::find(1);
	echo '<pre>';
	// print_r($customer);
	echo $customer->name;
});

// Route::get('customer/{id}',function($id){
// 	$customer = App\Customer::find($id);
// 	echo $customer->name."<br/>";
// 	echo 'Orders:'.'<br/>';
// 	$orders = $customer->orders;
// 	echo '<ul>';
// 	foreach($orders as $order){
// 		echo '<li>'.$order->name.'</li>';
// 	};
// });

Route::get('customer_name',function(){
	//->first means just show the first one whoes name is Tony, because maybe have many Tony
	$customer = App\Customer::where('name','=','Tony')->first();
	echo $customer->id;
});

Route::get('orders',function(){
	$orders = App\Order::all();
	foreach ($orders as $order) {
		// $customer = App\Customer::find($order->customer_id);
		// echo $order->name." Order by ".$customer->name."<br/>";

		//If you add "belongsto" in Order.php, you can use 1 lin instead of the 2 lins on the above
		echo $order->name." Order by ".$order->customer->name."<br/>";
	}
});

// Sample4:router->views
Route::get('mypage',function(){
	$data = array(
		'var1' => 'Hamburger',
		'var2' => 'HotDog',
		'var3' => 'Apple',
		);
	return view('mypage',$data);
});

//Sample5：Blade
Route::get('ordersBlade',function(){
	$data = array(
		'orders' => App\Order::all()
		);
	return view('orderBlade',$data);
});

//Sample6: Controllers (Sample3 and Sample6 can't use in the same time)
Route::get('customer/{id}','CustomerController@Customer');


//Sample7: Authentication. php artisan auth
Route::auth();

Route::get('/home', 'HomeController@index');

// Sample8: Middleware
//when user logedin, go to the access, if not go to login page
Route::group(['middleware' => 'web'],function(){
	Route::auth();
	Route::get('/',function(){
		return view('welcome');
	});
	//need add the information in the Kernel.php (in $routeMiddleware) for the middleware
	Route::get('access',function(){
		echo "You have access";

	})->middleware('isAdmin');

	Route::get('/home','HomeController@index');


});
