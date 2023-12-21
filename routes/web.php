<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add_users', [UsserController::class, 'add_ussers'])->name('add_users');

Route::post('/create_user', [UsserController::class, 'create_usser'])->name('create_user');

Route::get('/edit_user/{id}', [UsserController::class, 'edit_user'])->name('edit_user');

Route::put('/edit_user_2/{id}', [UsserController::class, 'edit_user_2'])->name('edit_user_2');


Route::get('/delete_user/{id}', [UsserController::class, 'delete_user'])->name('delete_user');
