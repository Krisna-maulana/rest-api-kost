<?php

use App\Http\Controllers\DataKostController;
use App\Http\Controllers\GetIdController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kost',[DataKostController::class,'index']);
Route::get('getId',[GetIdController::class,'showbyId']);
Route::post('kost',[DataKostController::class,'create']);
Route::put('kost',[DataKostController::class,'update']);
Route::delete('kost',[DataKostController::class,'delete']);
