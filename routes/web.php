<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsserController;
use \App\Http\Controllers\AddressController;
use \App\Http\Controllers\PostController;


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

/*------USERS----*/

Route::get('/', [UsserController::class, 'add_users'])->name('add_users');

Route::post('/create_user', [UsserController::class, 'create_user'])->name('create_user');

Route::get('/edit_user/{id}', [UsserController::class, 'edit_user'])->name('edit_user');

Route::put('/edit_user_2/{id}', [UsserController::class, 'edit_user_2'])->name('edit_user_2');


Route::get('/delete_user/{id}', [UsserController::class, 'delete_user'])->name('delete_user');



/*------ADDRESSSES----*/


Route::get('/show_addreses', [AddressController::class, 'show_addreses'])->name('show_addreses');

Route::get('/show_create_address', [AddressController::class, 'show_create_address'])->name('show_create_address');

Route::post('/create_address', [AddressController::class, 'create_address'])->name('create_address');

Route::get('/show_eddit_address/{id}', [AddressController::class, 'show_eddit_address'])->name('show_eddit_address');

Route::put('/eddit_address/{id}', [AddressController::class, 'eddit_address'])->name('eddit_address');

Route::delete('/delete_address/{id}', [AddressController::class, 'delete_address'])->name('delete_address');

Route::get('/show_relation_address_user', [AddressController::class, 'show_relation_address_user'])->name('show_relation_address_user');

Route::post('/relation_address_user', [AddressController::class, 'relation_address_user'])->name('relation_address_user');




/*------POSTS----*/

Route::get('/show_posts', [PostController::class, 'show_posts'])->name('show_posts');

Route::get('/show_create_post', [PostController::class, 'show_create_post'])->name('show_create_post');

Route::post('/create_post', [PostController::class, 'create_post'])->name('create_post');

Route::get('/show_eddit_post/{id}', [PostController::class, 'show_eddit_post'])->name('show_eddit_post');

Route::put('/eddit_post/{id}', [PostController::class, 'eddit_post'])->name('eddit_post');

Route::delete('/delete_post/{id}', [PostController::class, 'delete_post'])->name('delete_post');