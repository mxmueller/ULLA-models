<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Request\request_validation;
use App\Http\Controllers\Database_check\database_dependencies_check;
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

Route::get('/request_interface', function () {
    return view('request_interface');
});

Route::post('/request_validation', [request_validation::class, 'request_validation_unit'])->name('request_validation.unit');

// Development / Unit Routes
Route::get('/database_dependencies_check', [database_dependencies_check::class, 'check']);
