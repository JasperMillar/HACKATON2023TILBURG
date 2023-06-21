<?php

use App\Http\Controllers\GeldTipsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RekenmachineController;
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

Route::get('/', [GeldTipsController::class, 'index']);
Route::resource('home', HomeController::class);
Route::resource('rekenmachine', RekenmachineController::class);
Route::get('/werkgever', [HomeController::class, 'werkgever']);
Route::resource('GeldTips', GeldTipsController::class);

