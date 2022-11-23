<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactContrller;
use App\Http\Controllers\MessageController;

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
Route::view('/', 'welcome')->name('home');
Route::get('/listContactview', [ContactContrller::class,'index'])->name('listContactview');
Route::view('/addContactview', 'addContact')->name('addContactview');
Route::post('send',[MessageController::class,'sendMail'])->name('sendMail');
Route::post('sendgroup',[MessageController::class,'sendMailgroupe'])->name('sendMailgroupe');
Route::post('addContactform',[ContactContrller::class,'addContact'])->name('addContact');
