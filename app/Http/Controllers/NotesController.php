<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Note;
use App\Models\User;

class NotesController extends Controller
{
    public function OpenViewNotesPage()
    {
        return view('pages.notes');
    }


    public function OpenAddNotesPage()
    {
        return view('pages.addnotes');
    }


    public function AddNotetoDB(Request $request)
    {

        $validated = $request->validate([
            'content' => 'required',
        ]);


        $note = new Note(['content' => $request->content]);
        $user = User::find(auth()->user()->id);

        $user->notes()->save($note);

        return redirect()->action([NotesController::class, "OpenViewNotesPage"])
        ->with('noteAdded', 'Note has been added');
    }

}
