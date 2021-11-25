<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\ApiTestController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Opening to the outside world
Route::get('/',[ApiTestController::class,'api']);
