<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;

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

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/input', function () {
//     return view('input');
// });

// Route::get('/average', function () {
//     return view('average');
// });

Route::get('/index',[TempController::class,'index']);
Route::get('/input',[TempController::class,'input']);
Route::get('/showdata',[TempController::class,'showdata']);
Route::post('/input/add',[TempController::class,'insert'])->name('addData');