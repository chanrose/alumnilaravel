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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('alumni.home');
Route::get('/view-list', [App\Http\Controllers\HomeController::class, 'getList'])->name('alumni.viewlist');
Route::get('/add-alumni', [App\Http\Controllers\HomeController::class, 'addAlumni'])->name('alumni.addnew');

Route::post('/add-alumni', [App\Http\Controllers\HomeController::class, 'addAlumniSubmit'])->name('alumni.addSubmit');

/*Route::get('/viewlist', function () {
    return view('viewList');
});*/
Route::view('/addnew', 'addNew');

