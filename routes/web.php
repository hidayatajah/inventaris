<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\logincontroller;
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

Route::get('/', [logincontroller::class, 'login'])->name('login');
Route::post('/login-proses', [logincontroller::class, 'loginProses'])->name('login-proses');
Route::get('/logout', [logincontroller::class, 'logout'])->name('logout');

Route::get('/register', [logincontroller::class, 'register'])->name('register');
Route::post('/register-proses', [logincontroller::class, 'registerProses'])->name('register-proses');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function(){
    
    Route::get('/user', [homecontroller::class, 'index'])->name('index');
    Route::get('/dashboard', [homecontroller::class, 'dashboard'])->name('dashboard');

Route::get('/create', [homecontroller::class, 'create'])->name('user.create');
Route::post('/store', [homecontroller::class, 'store'])->name('user.store');

Route::get('/edit{id}', [homecontroller::class, 'edit'])->name('user.edit');
Route::put('/update{id}', [homecontroller::class, 'update'])->name('user.update');
Route::delete('/delete{id}', [homecontroller::class, 'delete'])->name('user.delete');
});