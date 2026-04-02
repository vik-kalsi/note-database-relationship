<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotesController;


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