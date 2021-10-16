<?php

use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\BuildingController;
use App\Models\Apartments;
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

Route::get('/form',[ApartmentsController::class,'getForm']);
Route::post('/form',[ApartmentsController::class,'creat'])->name('create.building');
Route::get('/home',[ApartmentsController::class,'getAll'])->name('create.building');
