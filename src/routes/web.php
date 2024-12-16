<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\OriginalLoginController;
use App\Http\Controllers\OriginalRegisterController;
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

Route::post('/register', [OriginalRegisterController::class, 'store']);
Route::post('/login', [OriginalLoginController::class, 'store']);

Route::get('/', [ItemController::class, 'index']);
Route::get('/search', [ItemController::class, 'search']);
Route::get('/item/{item_id}', [ItemController::class, 'detail'])->name('item.detail');

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [OriginalLoginController::class, 'destroy'])->name('login.destroy');
});
