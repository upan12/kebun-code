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
    return view('homepage.index');
});

Route::get('/about', function () {
    return view('homepage.about');
});

Route::get('/allCreation', function () {
    return view('homepage.allCreation');
});

Route::get('/myCreation', function () {
    return view('homepage.myCreation');
});

Route::get('/addCreation', function () {
    return view('homepage.addCreation');
});

Route::get('/contact', function () {
    return view('homepage.contact');
});

Route::get('/admin', function () {
    return view('dashboard.index');
});

Route::get('/admin/tables', function () {
    return view('dashboard.tables');
});
