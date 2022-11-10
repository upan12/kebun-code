<?php

use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
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


Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/', [HomepageController::class, 'index']);

// login
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'registration']);

Route::get('/forgot', function () {
    return view('homepage.forgot');
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

Route::resource('/admin/user', DashboardUserController::class);
