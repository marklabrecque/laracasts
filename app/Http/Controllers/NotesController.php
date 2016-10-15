<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
    	// Option #1
    	// $note = new Note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);

    	// Option #2
    	// $card->notes()->save($note);

    	// Option #3
    	// $card->notes()->create(['body' => $request->body]);

    	// Option #4
    	// $card->notes()->create($request->all());


    	return back();
    }
}
