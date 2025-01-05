<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\OriginalLoginController;
use App\Http\Controllers\OriginalRegisterController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PurchaseController;
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

Route::middleware('auth')->group(function () {
    Route::get('/item/{item_id}', [ItemController::class, 'detail'])->name('item.detail');
    Route::delete('/logout', [OriginalLoginController::class, 'destroy'])->name('login.destroy');
    Route::post('/favorite', [FavoriteController::class, 'create']);
    Route::post('/remove', [FavoriteController::class, 'delete']);
    Route::get('/purchase/{item_id}', [PurchaseController::class, 'purchase'])->name('purchase.purchase');
    Route::post('payment/store', [PaymentController::class, 'store'])->name('payment.store');
    Route::get('/mypage', [MypageController::class, 'mypage'])->name('mypage.mypage');
    Route::get('/mypage/profile', [MypageController::class, 'profile']);
    Route::post('/mypage/profile', [MypageController::class, 'edit']);
    Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'address']);
    Route::post('/purchase/address', [PurchaseController::class, 'change']);
});
