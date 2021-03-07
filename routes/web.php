<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use \App\Http\Controllers\AuthorisationController;
use \App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'news/categories', 'as' => 'categories/'], function () {
    Route::get('/', [NewsController::class, 'getCategories'])
        ->name('index');
    Route::get('/{id}', [NewsController::class, 'showCategory'])
        ->where('id', '\d+')
        ->name('show');
});

Route::group(['prefix' => 'news', 'as' => 'news/'], function() {
    Route::get('/', [NewsController::class, 'index'])
        ->name('index');
    Route::get('/{id}', [NewsController::class, 'show'])
        ->where('id', '\d+')
        ->name('show');
});

Route::match(['post', 'get'], 'contact', [ContactController::class, 'index'])
    ->name('contact');
