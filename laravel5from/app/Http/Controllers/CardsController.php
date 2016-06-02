<?php

namespace App\Http\Controllers;

use DB;
use App\card;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardsController extends Controller
{
    public function index()
    {
    	$cards = card::all();
    	return view('cards.index',compact('cards'));
    }

    // way1
    // public function show($id)
    // {
    // 	$card = card::find($id);
    // 	return view('cards.show',compact('card'));
    // }

    // way2
    public function show(Card $card)
    {
        return view('cards.show',compact('card'));
    }
}
