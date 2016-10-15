<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;
use App\Http\Requests;
use DB;

class CardsController extends Controller
{
    public function index()
    {
    	// Show a listing of all of the cards.
    	
        // Using query builder.
        //$cards = DB::table('cards')->get();

        // Using Eloquent (requires models).
        $cards = Card::all();

    	return view('cards.index', compact('cards'));
    }

    public function create()
    {
    	// Show create Card form.
    }

    public function store()
    {
    	// Insert the card to the database.
    }

    public function show(Card $card)
    {
    	// Show a single card and it's information.

        // Without route-model binding.
        // $card = Card::find($card);
        return view('cards.show', compact('card'));
        
        // With implicit model binding, ensure you type hint the method's parameter, as above.
        //return $card;
    }

    public function edit()
    {
    	// Show the edit form for the specific Card.
    }

    public function update()
    {
    	// Update the database record for the Card.
    }

    public function destroy()
    {
    	// Remove the card from the database.
    }
}
