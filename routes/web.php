<?php

use App\Http\Controllers\PainelController;
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
    return view('pages.index');
});
Route::get('/painel', function () {
    return view('layouts.painel');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('tecido', [PainelController::class, 'tecido']);
Route::get('cor', [PainelController::class, 'cor']);
Route::get('acessorio', [PainelController::class, 'acessorio']);

Route::post('tecido/store', [PainelController::class, 'tecidoStore']);
Route::post('cor/store', [PainelController::class, 'corStore']);
Route::post('acessorio/store', [PainelController::class, 'acessorioStore']);
