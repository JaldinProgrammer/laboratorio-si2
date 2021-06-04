<?php

use App\Http\Controllers\Auth\LoginController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::view('/', 'welcome');
 Route::view('login', 'login')->name('login');
 Route::view('dashboard', 'dashboard')->middleware(['auth']);
 Route::view('register', 'register');

 Route::post('login',[LoginController::class, 'login']);
 Route::post('logout',[LoginController::class, 'logout']);
 Route::post('user/create',[LoginController::class, 'create'])->name('user.create');
 //Route::get('chau',[LoginController::class, 'logout']);