<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\HomeController;
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
    return view('admin.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/view",[StudentController::class,"view"]);

Route::post("/import",[StudentController::class,"import"]);

Route::get("/export",[StudentController::class,"export"]);

