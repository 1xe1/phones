<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneCRUDController;

Route::resource('phones', PhoneCRUDController::class);
Route::get('/phones/admin', [PhoneCRUDController::class, 'admin'])->name('phones.admin');
Route::get('/phones/{phone}', 'PhoneController@show')->name('phones.show');


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
