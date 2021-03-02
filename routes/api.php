<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('bovin','App\Http\Controllers\bovinController');
Route::apiResource('race','App\Http\Controllers\raceController');
Route::apiResource('utilisateur','App\Http\Controllers\utilisateurController');
Route::apiResource('periode','App\Http\Controllers\periodeController');
Route::apiResource('achatAliment','App\Http\Controllers\achatAlimentController');
