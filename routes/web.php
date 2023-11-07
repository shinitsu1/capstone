<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('police.index');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);



Route::get('/login', [UserController::class, 'login']);
Route::get('/sidenav', function () {
    return view('sidenav'); // Assumes "AboutUs.blade.php" is in the "resources/views" directory.
})->name('sidenav');

Route::get('/message', function () {
    return view('message'); // Assumes "message.blade.php" is in the "resources/views" directory.
})->name('message');

Route::get('/tracking', function () {
    return view('tracking'); 
})->name('tracking');

