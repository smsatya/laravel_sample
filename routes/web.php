<?php

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

Route::get('fetchrecords', [\App\Http\Controllers\MigrationController::class, 'fetch']);
Route::get('createrecords', [\App\Http\Controllers\MigrationController::class, 'create']);
Route::get('updaterecords', [\App\Http\Controllers\MigrationController::class, 'update']);
Route::get('deleterecords', [\App\Http\Controllers\MigrationController::class, 'delete']);
