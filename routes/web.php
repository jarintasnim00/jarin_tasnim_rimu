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

Route::get('/jarin_tasnim_rimu/solution/1', function () {
    return view('problem1');
});

Route::get('/jarin_tasnim_rimu/solution/2', [App\Http\Controllers\TestController::class, 'problem2']);


Route::get('/jarin_tasnim_rimu/solution/3', [App\Http\Controllers\testController::class, 'index']);

