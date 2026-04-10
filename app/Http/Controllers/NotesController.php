<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
