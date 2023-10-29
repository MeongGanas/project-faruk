<?php

use App\Http\Controllers\RouterController;
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

Route::get('/', [RouterController::class, 'login_page']);
Route::get('/home', [RouterController::class, 'home']);
Route::get('/lists', [RouterController::class, 'lists']);
Route::get('/setting', [RouterController::class, 'setting']);
Route::get('/detailList', [RouterController::class, 'detailList']);
