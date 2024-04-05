<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShahadController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return ('welcome to tuwaiq');
});
Route:: get('/school', [ShahadController::class,'school']);
Route:: get('/total', [ShahadController::class,'Total']);
Route:: get('/shahad',[ShahadController::class,'Shahad']);

Route:: get('/getdata',[ShahadController::class,'Retdata']);
Route:: get('/showitems',[ShahadController::class,'showitem']);

Route::get('/sh', function () {
    return view('Shahad');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
