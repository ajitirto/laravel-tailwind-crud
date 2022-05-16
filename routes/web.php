<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('post', PostController::class);

Route::get('/home', function () {
    return view('home');
});
Route::get('/forgot-password', function () {
    return view('auth.password');
});


Route::livewire('/', 'live.index')->name('live.index');
Route::livewire('/create', 'live.create')->name('live.create');
Route::livewire('/edit/{id}', 'live.edit')->name('live.edit');
