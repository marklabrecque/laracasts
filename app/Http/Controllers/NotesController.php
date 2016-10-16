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
    	$note = new Note;
    	$note->body = $request->body;
        // Option #1
    	// $card->notes()->save($note);

    	// Option #2
    	// $card->notes()->save($note);

    	// Option #3
    	// $card->notes()->create(['body' => $request->body]);

    	// Option #4
    	// $card->notes()->create($request->all());

        $card->addNote($note);

    	return back();
    }
}
