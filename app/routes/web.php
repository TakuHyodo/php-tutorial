<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', App\Http\Actions\Car\IndexAction::class)->name('cars.index'); //追加
Route::get('/cars/create', App\Http\Actions\Car\CreateAction::class)->name('cars.create');
Route::post('/cars/store', App\Http\Actions\Car\StoreAction::class)->name('cars.store');
