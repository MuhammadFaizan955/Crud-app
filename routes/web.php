<?php

use App\Http\Controllers\faisController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where y'ou can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//  Route::resource('form',FormController::class);
   Route::resource('table',StudentController::class);
   Route::resource('task',faisController::class);

 