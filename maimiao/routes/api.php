<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\ApiTestController;
use \App\Http\Controllers\Api\PassportController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Opening to the outside world
Route::get('/',[ApiTestController::class,'api']);
// 登录
Route::get('login',[PassportController::class,'login']);
// 测试路由别名
Route::prefix('v1')->group(function (){
    Route::get('prefix',[ApiTestController::class,'v1']);
});
// 测试date
Route::get('date',[ApiTestController::class,'date']);
// 测试redis的lua脚本
Route::get('lua',[ApiTestController::class,'lua']);
// 测试消息发送
Route::get('send',[ApiTestController::class,'send']);
// 测试getData
Route::get('data',[ApiTestController::class,'getData']);
