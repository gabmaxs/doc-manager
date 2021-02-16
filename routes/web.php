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

Route::get('/', [App\Http\Controllers\PageController::class, "welcome"])->name("welcome");

Route::get('/docs/{version}', [App\Http\Controllers\PageController::class, 'redirect'])->name('redirect');

Route::get('/docs/{version}/{category}', [App\Http\Controllers\PageController::class, 'docs'])->name('docs');
Route::get('/docs/{version}/{category}/edit', [App\Http\Controllers\PageController::class, 'edit'])->name('edit');

Auth::routes();

// AJAX ROUTES
Route::put('/section/{section}', [App\Http\Controllers\EditController::class, 'editSection']);
Route::put('/page/{page}', [App\Http\Controllers\EditController::class, 'editPage']);