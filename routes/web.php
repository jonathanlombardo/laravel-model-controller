<?php

use App\Http\Controllers\Guest\MovieController;
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

Route::redirect('/', '/movies');
Route::get('/movies', [MovieController::class, 'index'])->name('movie.index');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movie.show');
