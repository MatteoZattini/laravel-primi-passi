<?php

use App\Http\Controllers\altroController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/altro', function () {
//     return view('altro');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [ homeController::class , 'index']);
Route::get('/altro', [ altroController::class , 'index']);
