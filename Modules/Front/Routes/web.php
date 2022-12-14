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
use Modules\Front\Http\Controllers\ContactController;
use Modules\Front\Http\Controllers\DonationController;
use Modules\Front\Http\Controllers\FrontController;
use Modules\Front\Http\Controllers\LoginController;
use Modules\Front\Http\Controllers\LowerPageController;
use Modules\Front\Http\Controllers\NewsController;
use Modules\Front\Http\Controllers\PlayerController;

Route::group(['middleware' => 'basic_auth'], static function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/about_us', [LowerPageController::class, 'about_us'])->name('about_us');
    Route::get('/member', [LowerPageController::class, 'member'])->name('member');
    Route::get('/sponsor', [LowerPageController::class, 'sponsor'])->name('sponsor');
    Route::get('/privacy_policy', [LowerPageController::class, 'privacy_policy'])->name('privacy_policy');

    Route::group(['prefix' => 'news', 'as' => 'news.'], static function (): void {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/show/{news}', [NewsController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => 'contact', 'as' => 'contact.'], static function (): void {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::get('/complete', [ContactController::class, 'complete'])->name('complete');
        Route::post('/post', [ContactController::class, 'post'])->name('post');
    });

    Route::group(['prefix' => 'player', 'as' => 'player.'], static function (): void {
        Route::get('/register', [PlayerController::class, 'register'])->name('register');
        Route::post('/post', [PlayerController::class, 'post'])->name('post');

        Route::middleware('auth:player')->group(function () {
            Route::get('/{player}/mypage', [PlayerController::class, 'mypage'])->name('mypage');
            Route::get('/{player}/edit', [PlayerController::class, 'edit'])->name('edit');
        });

    });

    Route::group(['prefix' => 'player', 'as' => 'player.'], static function (): void {
        Route::group(['prefix' => 'login', 'as' => 'login.'], static function (): void {
            Route::get('/', [LoginController::class, 'index'])->name('index');
            Route::post('/', [LoginController::class, 'login'])->name('post');
        });

        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });

    Route::group(['prefix' => 'donation', 'as' => 'donation.'], static function (): void {
        Route::get('/', [DonationController::class, 'index'])->name('index');

        Route::group(['prefix' => 'form', 'as' => 'form.'], static function (): void {
            Route::get('/', [DonationController::class, 'form'])->name('index');
            Route::get('/complete', [DonationController::class, 'complete'])->name('complete');
            Route::post('/post', [DonationController::class, 'post'])->name('post');
        });
    });

});




