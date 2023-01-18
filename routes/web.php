<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


    Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/', [LoginController::class, 'authenticate'])->name('authlogin');
    // Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/form', [FormController::class,'index'])->name('form');

    Route::resource('/form/store', FormController::class);

    Route::get('/page-1', [PageController::class, 'Page1'])->name('page-1');
    Route::post('/page-1/proses', [PageController::class, 'Page1Proses'])->name('page-1-proses');
    Route::get('/page-2', [PageController::class, 'Page2'])->name('page-2');
    Route::post('/page-2/proses', [PageController::class, 'Page2Proses'])->name('page-2-proses');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class,'store'])->name('register');


