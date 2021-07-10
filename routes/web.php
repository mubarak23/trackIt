<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\auth\RegisterController;
use App\Http\controllers\auth\LoginController;
use App\Http\controllers\auth\LogoutController;
use App\Http\controllers\DashboardController;
use App\Http\controllers\ProjectController;
use App\Http\controllers\AdminController;
use App\Http\controllers\ReportController;
//ProjectController ReportController


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
Route::get('/auth/login', [LoginController::class, 'index'])->name('auth');
Route::post('/login', [LoginController::class, 'login'])->name('login');

//logout
Route::post('/auth/logout', [LogoutController::class, 'store'])->name('logout');

//default user dashboard
Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/project/add', [ProjectController::class, 'index'])->name('project')->middleware('auth');
Route::get('/project/{project_id}', [ProjectController::class, 'single_project'])->name('single_project')->middleware('auth');

Route::post('/project', [ProjectController::class, 'store_project'])->name('addProject')->middleware('auth');

// report
//Route::get('/report/{$project_id}', [ReportController::class, 'index']);
Route::get('/report/{project_id}', [ReportController::class, 'report'])->middleware('auth');

Route::post('/submit_report', [ReportController::class, 'submit_report'])->name('submit_report')->middleware('auth');


Route::get('/admin', [AdminController::class, 'index'])->name("admin");

// register_admin
Route::post('/auth/admin', [RegisterController::class, 'register_admin'])->name("auth_admin");

Route::get('/profile', function () {
    return view('apps.profile');
});

//Route::get('/report/{$project_id}', function () {
//    return view('apps.report');
//});


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
