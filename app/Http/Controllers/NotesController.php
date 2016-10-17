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

        // Validate incoming request.
        $this->validate($request, [
            'body' => 'required|min:10'
        ]);

    	$note = new Note;
    	$note->body = $request->body;

        // Hard coding this until we can provide authentication.
        $note->user_id = 1;

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

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return redirect('/notes/' . $note->id .'/edit');
    }
}
