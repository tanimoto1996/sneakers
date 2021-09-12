<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\NoticeController;

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

Route::get('/', [NoticeController::class, 'index'])->name('home');

Route::get('/show/{id}', [NoticeController::class, 'show'])->name('show');

// ログインしている、URLの先頭にback、ruoute　nameにback. をつける
Route::group(['prefix' => 'admin', 'as' => 'back.', 'middleware' => ['auth']], function () {
    // 一覧画面(ダッシュボード)
    Route::get('/', function () {
        return view('back.home');
    });

    Route::get('/index', [App\Http\Controllers\back\NoticeController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\back\NoticeController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\back\NoticeController::class, 'store'])->name('store');
    Route::get('/{id}/edit/', [App\Http\Controllers\back\NoticeController::class, 'edit'])->name('edit');
    Route::post('/{id}/edit/', [App\Http\Controllers\back\NoticeController::class, 'update'])->name('update');
    Route::post('/{id}/destroy/', [App\Http\Controllers\back\NoticeController::class, 'destroy'])->name('destroy');
});
