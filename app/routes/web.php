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

Route::middleware('auth:web')
    ->group(function () {
        Route::get('/cars/create', App\Http\Actions\Car\CreateAction::class)->name('cars.create');
        Route::post('/cars/store', App\Http\Actions\Car\StoreAction::class)->name('cars.store');
        Route::get('/cars/{car}/edit', App\Http\Actions\Car\EditAction::class)->name('cars.edit');
        Route::post('/cars/{car}/edit', App\Http\Actions\Car\UpdateAction::class)->name('cars.update');
        Route::post('/cars/{car}/delete', App\Http\Actions\Car\DeleteAction::class)->name('cars.delete');
        //Route::get('/companies', App\Http\Actions\Company\IndexAction::class)->name('companies.index');
//        Route::get('/companies/create', App\Http\Actions\Company\CreateAction::class)->name('companies.create');
//        Route::post('/companies/store', App\Http\Actions\Company\StoreAction::class)->name('companies.store');
//        Route::get('/companies/{company}', App\Http\Actions\Company\ShowAction::class)->name('companies.show');
//        Route::get('/companies/{company}/edit', App\Http\Actions\Company\EditAction::class)->name('companies.edit');
//        Route::post('/companies/{company}/edit', App\Http\Actions\Company\UpdateAction::class)->name('companies.update');
//        Route::post('/companies/{company}/delete', App\Http\Actions\Company\DeleteAction::class)->name('companies.delete');
    });
Route::get('/cars', App\Http\Actions\Car\IndexAction::class)->name('cars.index');
Route::get('/cars/{car}', App\Http\Actions\Car\ShowAction::class)->name('cars.show');
Route::get('/companies', App\Http\Actions\Company\IndexAction::class)->name('companies.index');
Route::get('/companies/create', App\Http\Actions\Company\CreateAction::class)->name('companies.create');
Route::post('/companies/store', App\Http\Actions\Company\StoreAction::class)->name('companies.store');
Route::get('/companies/{company}', App\Http\Actions\Company\ShowAction::class)->name('companies.show');



