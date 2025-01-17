<?php

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

Route::get('/admin', function (){
    return view('Master`Project');
});

Route::get('/MasterProject', function (){
    return view('MProject');
});
// tugas //

Route::get('/Home', function (){
    return view('Home');
});

Route::get('/Master Project', function (){
    return view('Master Project');
});

Route::get('/Master Service', function (){
    return view('Master Service');
});
