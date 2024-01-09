<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about-page', function () {
    return view('about');
})->name('about');
Route::get('/contact-page', function () {
    return view('contact');
})->name('contact');
Route::get('/service-page', function () {
    return view('service');
})->name('service');
