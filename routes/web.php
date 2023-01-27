<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EnterpriseController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/enterprises',[MainController::class,'indexEnterprises'])->name('enterprises');
Route::get('/enterprises/{enterprise:slug}',[MainController::class,'show'])->name('enterprise');

Route::get('/admin/enterprises',[EnterpriseController::class,'index'])->middleware('admin')->name('enterprises.index');
Route::get('/admin/enterprises/create',[EnterpriseController::class,'create'])->middleware('admin')->name('enterprises.create');
Route::post('/admin/enterprises/store',[EnterpriseController::class,'store'])->middleware('admin')->name('enterprises.store');
Route::get('/admin/enterprises/{enterprise}/edit',[EnterpriseController::class,'edit'])->middleware('admin')->name('enterprises.edit');
Route::put('/admin/enterprises/{enterprise}/update',[EnterpriseController::class,'update'])->middleware('admin')->name('enterprises.update');
Route::delete('/admin/enterprises/{enterprise}/delete>',[EnterpriseController::class,'delete'])->middleware('admin')->name('enterprises.delete');

