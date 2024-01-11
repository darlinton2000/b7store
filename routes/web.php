<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Models\State;
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

/**
 * PAGES
 */
Route::get('/', function () {
    $data['categories'] = [];
    $data['states'] = [];
    return view('home', $data);
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/select-state', [AuthController::class, 'select_state'])->name('select-state');
    Route::post('/select-state', [AuthController::class, 'select_state_action'])->name('select_state_action');

    /**
     * DASHBOARD
     */
    Route::get('/dashboard/my-account', [DashboardController::class, 'my_account'])->name('my_account');
    Route::post('/dashboard/my-account', [DashboardController::class, 'my_account_action'])->name('my_account_action');
    Route::get('/dashboard/my-ads', [DashboardController::class, 'my_ads'])->name('my_ads');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

/**
 * AUTH / REGISTER ROUTES
 */
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('register_action');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login_action'])->name('login_action');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

// TODO: forget-password-post


