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
use Modules\Front\Http\Controllers\DonationController;
use Modules\Front\Http\Controllers\FrontController;
use Modules\Front\Http\Controllers\LowerPageController;

Route::group(['middleware' => 'basic_auth'], static function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/about_us', [LowerPageController::class, 'about_us'])->name('about_us');
    Route::get('/member', [LowerPageController::class, 'member'])->name('member');
    Route::get('/donation', [LowerPageController::class, 'donation'])->name('donation');

    Route::group(['prefix' => 'donation', 'as' => 'donation.'], static function (): void {
        Route::get('/', [DonationController::class, 'index'])->name('index');
        Route::get('/form', [DonationController::class, 'form'])->name('form');
        Route::get('/form/complete', [DonationController::class, 'complete'])->name('form.complete');
        Route::post('/form/post', [DonationController::class, 'post'])->name('form.post');
    });

});




