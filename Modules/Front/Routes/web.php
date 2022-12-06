<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Front\Http\Controllers\AboutUsController;
use Modules\Front\Http\Controllers\FrontController;


if (app()->isLocal()) {
    Route::group(['middleware' => 'basicauth'], function() {
        Route::get('/', [FrontController::class, 'index'])->name('index');
        Route::get('/about_us', [AboutUsController::class, 'index'])->name('about_us');
    });
}
else {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/about_us', [AboutUsController::class, 'index'])->name('about_us');
}



