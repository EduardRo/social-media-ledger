<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Creation;
use App\Models\Fund;
use App\Http\Controllers\FundController;
use App\Http\Controllers\CreationController;
use App\Http\Controllers\AuthController;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/creations', [CreationController::class, 'index']);
Route::get('creations/verification/{name}', [CreationController::class, 'verifi']);
Route::get('/creations/{id}', [CreationController::class, 'show']);

/*
Old example that didn't used Controller
Route::get('/funds', function (Request $request) {
    return Fund::all();
});
*/
//All the fund using Controller and FundResource

// the store request without authentification
// Route::post('/creations', [CreationController::class, 'store']);



Route::get('/funds', [FundController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);


//Route::get('/protected-route', 'ApiController@protectedMethod')->middleware('auth');
Route::middleware(['auth:api'])->group(function () {
    //Route::get('/protected-route-1', 'ApiController@protectedMethod1');
    //Route::post('/protected-route-2', 'ApiController@protectedMethod2');
    // Add more protected routes here
    Route::post('/creations', [CreationController::class, 'store']);
    Route::put('/creations/{id}', [CreationController::class, 'update']);
});
Route::delete('/creations/{id}', [CreationController::class, 'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
