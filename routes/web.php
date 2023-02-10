<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\welcomeMail;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin',[Admin::class,'index']);
Route::get('findcoach',[CoachController::class,'findCoach']);
Route::post('save',[Admin::class,'addCoach']);
Route::get('coaches/{id}',[CoachController::class,'index']);
Route::get('sendmail',[welcomeMail::class,'index']);