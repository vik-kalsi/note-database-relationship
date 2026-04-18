<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\DeleteAccountController;
use App\Http\Controllers\LogOutController;


Route::get('/', function () {
    return view('welcome');
})->middleware('guest');


#Register page
Route::get('/register', [RegisterController::class, "OpenRegistrationPage"])
->middleware('guest');

Route::post('/register', [RegisterController::class, "RegisterUser"]);



#Login page
Route::get('/login', [LoginController::class, 'OpenLoginPage'])
->middleware('guest')
->name('login');

Route::post('/login', [LoginController::class, 'LoginUser']);


#Notes
Route::get('/notes', [NotesController::class, "OpenViewNotesPage"])
->middleware('auth');

Route::get('/addnotes', [NotesController::class, "OpenAddNotesPage"])
->middleware('auth');

Route::post('/addnotes', [NotesController::class, "AddNotetoDB"])
->middleware('auth');

Route::get('/editnote/{id}', [NotesController::class, "OpenNoteToEdit"])
->name('note.edit')
->middleware('auth');


Route::put('/editnote/{id}', [NotesController::class, "EditingTheNoteSubmission"]) ->name('update_note_submission')
->middleware('auth');


Route::delete('/notes/{id}', [NotesController::class, "DeleteSelectedNote"]) ->name('notes.destroy')
->middleware('auth');


#Delete user account
Route::get('/deleteaccount', [DeleteAccountController::class, "OpenDeleteAccountPage"])
->middleware('auth');

Route::delete('/deleteaccount/{id}', [DeleteAccountController::class, "DeleteAccount"])->name('account.delete')
->middleware('auth');


#Log out user
Route::post('/logout', [LogOutController::class, "LogOutUser"])
->name('logout_user')
->middleware('auth');