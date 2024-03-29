<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserManageController;
// use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authlogin')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/', FormController::class, ['name' => 'formPage']);
Route::get('/', [FormController::class, 'index'])->name('pageForm');

Route::resource('/admin', AdminController::class, ['name' => 'admin'])->middleware('role');
Route::resource('/usermanage', UserManageController::class, ['name' => 'user'])->middleware('role');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('guest');
