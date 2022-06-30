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
Route::middleware('guest')->group(function (){
    Route::get('register' , [\App\Http\Controllers\Auth\RegisterController::class , 'showForm'])->name('register');
    Route::post('register' , [\App\Http\Controllers\Auth\RegisterController::class , 'createUser'])->name('register.post');
    Route::view('login' , 'auth.login')->name('login');
    Route::post('login' , [\App\Http\Controllers\Auth\LoginController::class , 'login'])->name('login.post');
});

Route::group(['prefix' => 'merchants' , 'as' => 'merchants.' , 'middleware' => 'auth'] , function (){
    Route::get('/' , [\App\Http\Controllers\Merchants\DashboardController::class , 'index'])->name('index');
    Route::resource('products' , \App\Http\Controllers\Merchants\ProductsController::class);

    Route::get('logout' , function (){ \Illuminate\Support\Facades\Auth::logout(); return redirect()->to('/'); });
});
