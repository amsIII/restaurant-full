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
    return view('home');
});

// MENU
Route::get('/menu', function () {
    return view('menu/index ');
});

// PAGES
Route::get('/waitlist', function () {
    return view('pages/waitlist');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/giftcards', function () {
    return view('pages/giftcards');
});
// Route::get('/about', function () {
//     return view('pages/about');
// });
Route::get('/offers', function () {
    return view('pages/offers');
});
