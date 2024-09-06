<?php

use App\Http\Controllers\TranslateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [TranslationController::class, 'index']);
Route::post('/translate', [TranslationController::class, 'translate'])->name('translate');




Route::get('/multi-translate', [TranslateController::class, 'showMultiTranslatePage'])->name('multiTranslatePage');
Route::post('/multi-translate', [TranslateController::class, 'multiTranslate'])->name('multiTranslate');



