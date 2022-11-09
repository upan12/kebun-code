<?php

use App\Http\Controllers\DashboardCreationController;
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

// dashboard
Route::get('/admin', function () {
    return view('dashboard.index');
});

Route::get('/admin/tables', function () {
    return view('dashboard.tables');
});

Route::resource('/admin/creation', DashboardCreationController::class);
Route::put('/creation/check/{creation}', [DashboardCreationController::class, 'check_creation']);
Route::put('/creation/disable/{creation}', [DashboardCreationController::class, 'disable_creation']);
Route::put('/creation/active/{creation}', [DashboardCreationController::class, 'active_creation']);