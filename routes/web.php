<?php

//use App\Http\Controllers\ModificationForm;
use App\Http\Controllers\ModificationFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
})-> name('home');

Route::get('/About', function () {
    return view('About');
})->name('about');
Route::get('/Login', function () {
    return view('Login');
})->name('loginn');

Route::post('/login', [AuthController::class,'login'])->name('log');

Route::post('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/Modification_form', [ModificationFormController::class, 'index'])->name('form');
Route::post('/Submit-form', [ModificationFormController::class, 'submit'])->name('store');
Route::get('/Successful', function () {
    return view('Successful');
})->name('Successful.page');