<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\auth\RegisterController;
use App\Http\controllers\auth\LoginController;
use App\Http\controllers\auth\LogoutController;
use App\Http\controllers\DashboardController;
//LoginController


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
    return view('welcome');
});


Route::get('/home', function () {
    return view('apps.index');
});

// register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/auth/register', [RegisterController::class, 'register'])->name('auth_register');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('show');
Route::post('/auth/login', [LoginController::class, 'login'])->name('login');

//logout
Route::post('/auth/logout', [LogoutController::class, 'store'])->name('logout');

//default user dashboard
Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', function () {
    return view('apps.profile');
});


Route::get('/project', function () {
    return view('apps.project');
});

Route::get('/add', function () {
    return view('apps.addproject');
});

Route::get('/login', function () {
    return view('apps.login');
});

Route::get('/register', function () {
    return view('apps.register');
});
