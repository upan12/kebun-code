<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardCreationController;
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
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'registration']);

// homepage
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
})->middleware('auth');

Route::get('/creation/{id}', [HomepageController::class, 'creation'])->middleware('auth');
Route::get('/allCreation', [HomepageController::class, 'allCreation']);
Route::get('/myCreation', [HomepageController::class, 'myCreation'])->middleware('auth');
Route::get('/addCreation', [HomepageController::class, 'addCreation'])->middleware('auth');
Route::post('/create/creation', [HomepageController::class, 'createCreation']);

// dashboard

Route::resource('/admin/creation', DashboardCreationController::class);
Route::put('/creation/check/{creation}', [DashboardCreationController::class, 'check_creation']);
Route::put('/creation/disable/{creation}', [DashboardCreationController::class, 'disable_creation']);
Route::put('/creation/active/{creation}', [DashboardCreationController::class, 'active_creation']);
Route::resource('/admin/user', DashboardUserController::class);
Route::resource('/admin/category', DashboardCategoryController::class);


// dashboard user
Route::resource('/admin/user', DashboardUserController::class)->middleware('auth'); 
Route::put('/user/check/{user}', [DashboardUserController::class, 'check_user']);
Route::put('/user/disable/{user}', [DashboardUserController::class, 'disable_user']);
Route::put('/user/active/{user}', [DashboardUserController::class, 'active_user']);

// dashboard active

Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');