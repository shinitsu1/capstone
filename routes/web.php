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
    return view('police.landingpage');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);


Route::get('/login', [UserController::class, 'login']);
Route::get('/sidenav', function () {
    return view('sidenav'); // Assumes "AboutUs.blade.php" is in the "resources/views" directory.
})->name('sidenav');

Route::get('/try', function (){
    return view('components.topnav');
});
