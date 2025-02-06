<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

//Route::get('/', [FirebaseController::class, 'getUsers']);
Route::get('/users', [FirebaseController::class, 'getUsers']);
Route::get('/diseases', [FirebaseController::class, 'getDisease']);

 Route::get('/', function () {
     return view('welcome');
 });
