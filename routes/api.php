<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Creation;
use App\Models\Fund;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/creations', function (Request $request) {
    return Creation::all();
});

Route::get('/funds', function (Request $request) {
    return Fund::all();
});
