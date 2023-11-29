<?php

use App\Http\Controllers\PoliceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PoliceController::class, 'index'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/logout', [UserController::class, 'logout']);


Route::get('/back', [UserController::class, 'back']);


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);



Route::get('/sidenav', function () {
    return view('sidenav'); 
})->name('sidenav');

Route::get('/Login', function () {
    return view('Login'); 
})->name('Login');

Route::get('/Messaging', function () {
    return view('Messaging'); 
})->name('Messaging');

Route::get('/Cam', function () {
    return view('Cam'); 
})->name('Cam');

Route::post('/send-sms', [SmsController::class, 'sendSMS']);