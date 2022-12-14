<?php

use Illuminate\Support\Facades\Route;
use App\Models\Games;
use App\Http\Controllers\AuthController;
use App\Models\Publisher;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/games', function() {
    return view('games', [
        "games" => Games::all()
    ]);
})->middleware(['auth']);

Route::get('/register', function () {
    return view('register');
})->name("register");

Route::post('/action-register', [AuthController::class, 'actionRegister']);

Route::get('/login', [AuthController::class, 'loginView'])->name("login");

Route::post('/action-login', [AuthController::class, 'actionLogin']);

Route::get('/logout', [AuthController::class, 'logout']);