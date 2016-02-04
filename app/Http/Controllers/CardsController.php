<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index()
    {
//        $cards = DB::table('cards')->get();
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }
//    public function show($id)
//    {
//        $card = Card::find($id);
//
//        return view('cards.show', compact('card'));
//    }
}
