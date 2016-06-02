<?php

namespace App\Http\Controllers;

use App\card;
use App\note;
use Illuminate\Http\Request;
use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, card $card)
    {
        $this->validate($request,[
            'body' => 'required|min:10'
        ]);

        // way1:
    	// $note = new note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);
    	// return back();

    	//way2:
    	// $note = new note(['body' => $request->body]);
    	// $card->notes()->save($note);
    	// return back();

    	//way3:
    	// $card->notes()->save(
    	// 	new note(['body' => $request->body])
    	// );
    	// return back();

    	//way4:
    	// $card->notes()->create(['body'=>$request->body]);
    	// return back();

    	//way5: this way is danger
    	// $card->notes()->create($request->all());
    	// return back();

        //way6:
        // $card->addNote(
        //     new note($request->all())
        // );
        // return back();

        //way7:
        $note = new note($request->all());
        $note->user_id = 1;    // Auth::id();

        $card->addNote($note);
        return back();
    }

    public function edit(note $note)
    {
    	return view('cards.note',compact('note'));

    }

    public function update(Request $request, note $note)
    {
        $note->update($request->all());
        return back();
    }
}