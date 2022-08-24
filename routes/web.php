<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\COntrollers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Application;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin' ,'middleware'=>['isAdmin','auth']],function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    Route::get('students',[AdminController::class,'students'])->name('admin.students');
    Route::get('applications',[AdminController::class,'applications'])->name('admin.applications');
    Route::get('schedules',[AdminController::class,'schedules'])->name('admin.schedules');
    Route::get('payments',[AdminController::class,'payments'])->name('admin.payments');
    Route::get('sessions',[AdminController::class,'sessions'])->name('admin.sessions');
    Route::get('modes',[AdminController::class,'modes'])->name('admin.modes');
    Route::post('modes',[AdminController::class,'store']);
    Route::put('modes',[AdminController::class,'store']);
    Route::get('info',[AdminController::class,'payments'])->name('admin.info');
});
Route::group(['prefix'=>'user' ,'middleware'=>['isUser','auth']],function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('payments',[UserController::class,'payments'])->name('user.payments');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
    Route::get('time_table',[UserController::class,'time_table'])->name('user.time_table');
    Route::get('application',[Application::class,'index'])->name('user.application');
    Route::post('apply',[Application::class,'apply'])->name('user.apply');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
