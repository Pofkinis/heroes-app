<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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


Route::group([
    'middleware' => [
        'auth:sanctum',
        'verified'
    ],
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('favorites', [HeroController::class, 'showFavorites'])->name('favorites');
    Route::get('/myHeroes', [HeroController::class, 'indexUserHeroes'])->name('heroes.manage');
});

Route::resource('heroes', HeroController::class);
