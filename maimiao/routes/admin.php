<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\AdminTestController;
// Opening to the admin
/*Route::prefix('admin')->middleware(['auth:admin'])->group(function () {

});*/
Route::get('/',[AdminTestController::class,'admin']);
