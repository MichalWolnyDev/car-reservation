<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Reservations;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// posts
// CRUD
// 1. get all (GET) /api/posts
// 2. create a post (POST) /api/posts
// 3. get a single (GET)  /api/posts/{id}
// 4. update a single (PUT) /api/posts/{id}
// 5. delete (DELETE) /api/posts/{id}


// Router::get('/reservations', 'ReservationController@index');
// Router::post('/reservations', 'ReservationController@store');
// Router::get('/reservations', 'ReservationController@show');
// Router::put('/reservations', 'ReservationController@update');
// Router::delete('/reservations', 'ReservationController@destroy');

// shorthand down below
Route::resource('reservations', ReservationController::class);

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
