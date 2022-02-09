<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivitiesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/show',[ActivitiesController::class,'show']);


Route::put('/create',[ActivitiesController::class,'create']);

Route::delete('/delete/{id}',[ActivitiesController::class,'delete']);

Route::put('/update/{id}',[ActivitiesController::class,'update']);
