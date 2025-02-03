<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

Route::get('/firebase/store', [FirebaseController::class, 'storeUser']);
Route::get('/firebase/users', [FirebaseController::class, 'getUsers']);

// Route::get('/', function () {
//     return view('welcome');
// });
