<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CaesarCipherController;

Route::get('/caesar-cipher', [CaesarCipherController::class, 'index']);
Route::post('/caesar-cipher/encrypt', [CaesarCipherController::class, 'encrypt']);
Route::post('/caesar-cipher/decrypt', [CaesarCipherController::class, 'decrypt']);
Route::post('/caesar-cipher', [CaesarCipherController::class, 'process']);

