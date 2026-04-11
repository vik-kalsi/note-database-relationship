<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Note;
use App\Models\User;

class NotesController extends Controller
{
    public function OpenViewNotesPage()
    {
        $notes = User::find(auth()->user()->id)->notes;
        return view('pages.notes', ["notes" => $notes]);
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



    public function OpenNoteToEdit()
    {
        return view('pages.editnote');
    }



    public function DeleteSelectedNote($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->action([NotesController::class, "OpenViewNotesPage"])
        ->with('noteDeletedSuccess', 'Note has been deleted succesfully');
    }

}
