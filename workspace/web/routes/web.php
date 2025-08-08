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
    return view('home');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/curriculum', function () {
    return view('curriculum');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/children', function () {
    return view('children');
});

Route::get('/corporate-training', function () {
    return view('corporate-training');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/programs', function () {
    return view('programs');
});