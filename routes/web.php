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
use App\Http\Controllers\MainController as MainController;

Route::get('/', [MainController::class, 'index']) -> name('home');

Route::get('/show/{id}', [MainController::class, 'show']) -> name('show');

Route::get('/create', [MainController::class, 'create']) -> name('create');

Route::post('/comics', [MainController::class, 'store']) -> name('store');

Route::get('/edit/{id}', [MainController::class, 'edit']) -> name('edit');

Route::put('/update/{id}', [MainController::class, 'update']) -> name('update');

