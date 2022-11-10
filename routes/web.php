<?php

use App\Http\Controllers\DashboardCreationController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/login', function () {
    return view('homepage.login');
});

Route::get('/forgot', function () {
    return view('homepage.forgot');
});

Route::get('/register', function () {
    return view('homepage.register');
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

Route::get('/addCreation', [HomepageController::class, 'creation']);

Route::post('/create/creation', [HomepageController::class, 'createCreation']);

// dashboard

Route::get('/admin/tables', function () {
    return view('dashboard.tables');
});

Route::resource('/admin/creation', DashboardCreationController::class);
Route::put('/creation/check/{creation}', [DashboardCreationController::class, 'check_creation']);
Route::put('/creation/disable/{creation}', [DashboardCreationController::class, 'disable_creation']);
Route::put('/creation/active/{creation}', [DashboardCreationController::class, 'active_creation']);
Route::resource('/admin/user', DashboardUserController::class);
