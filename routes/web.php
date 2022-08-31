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
    Route::get('students/{id?}',[AdminController::class,'students'])->name('admin.students');
    Route::get('applications/{id?}',[AdminController::class,'applications'])->name('admin.applications');
    Route::get('applications/accept/{id}',[AdminController::class,'accept_application'])->name('admin.accept_application');
    Route::get('applications/reject/{id}',[AdminController::class,'reject_application'])->name('admin.reject_application');
    Route::get('schedules',[AdminController::class,'schedules'])->name('admin.schedules');
    Route::get('schedule/{id}',[AdminController::class,'getSchedule'])->name('admin.schedule');
    Route::post('schedules',[AdminController::class,'save_schedule']);
    Route::get('payments',[AdminController::class,'payments'])->name('admin.payments');
    Route::get('sessions/schedule/set/',[AdminController::class,'set_session_schedule'])->name('admin.session.set_schedule');
    Route::post('sessions/schedule/set/',[AdminController::class,'save_session_schedule'])->name('admin.session.set_schedule');
    Route::get('sessions/schedule/{id}',[AdminController::class,'session_schedule'])->name('admin.session.schedule');
    Route::get('sessions',[AdminController::class,'sessions'])->name('admin.sessions');
    Route::post('sessions',[AdminController::class,'store_session']);
    Route::get('sessions/{id}',[AdminController::class,'delete_session'])->name('admin.delete_session');
    Route::get('modes',[AdminController::class,'modes'])->name('admin.modes');
    Route::get('modes/{id}',[AdminController::class,'delete_mode'])->name('admin.delete_mode');
    Route::post('modes',[AdminController::class,'store_mode']);
    Route::put('modes',[AdminController::class,'update_mode']);
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
