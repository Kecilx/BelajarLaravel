<?php

use App\Http\Controllers\Court_TypeController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\TransactionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function (){
//     return ('home');
// });

// Route::get('/admin', function (){
//     return view('Master`Project');
// });

// Route::get('/MasterProject', function (){
//     return view('MProject');
// });
// // tugas //

// Route::get('/Home', function (){
//     return view('Home');
// });

// Route::get('/Master Project', function (){
//     return view('Master Project');
// });

// Route::get('/Master Service', function (){
//     return view('Master Service');
// });

Route::get('/Court_Type', [Court_TypeController::class, 'index']);
Route::post('/Court_Type', [Court_TypeController::class, 'store']);

Route::get('/Court', [CourtController::class, 'index']);
Route::post('/Court', [CourtController::class, 'store']);

Route::get('/User', [UserController::class, 'index']);
Route::post('/User', [UserController::class, 'store']);

Route::get('/Transaction', [TransactionController::class, 'index']);
Route::post('/Transaction', [TransactionController::class, 'store']);

Route::resource('Court', CourtController::class);
