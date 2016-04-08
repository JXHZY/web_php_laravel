<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer as Customer;

// Way1:
// class CustomerController extends Controller
// {
//     //
//     public function customer($id){
//     	$customer = Customer::find($id);
// 		echo $customer->name."<br/>";
// 		echo 'Orders:'.'<br/>';
// 		$orders = $customer->orders;
// 		echo '<ul>';
// 		foreach($orders as $order){
// 			echo '<li>'.$order->name.'</li>';
// 		};
// 		echo '</ul>';
//     }
// }

//Way2:
class CustomerController extends Controller
{
    //
    public function customer($id){
    	$customer = Customer::find($id);
		return view('customer',array('customer'=>$customer));
    }
}