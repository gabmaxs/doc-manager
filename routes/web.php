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

Route::get('/docs/{version:title?}', [App\Http\Controllers\PageController::class, 'redirect'])->name('redirect');

Route::get('/docs/{version:title}/{category:title}', [App\Http\Controllers\PageController::class, 'docs'])->name('docs');
Route::get('/docs/{version:title}/{category:title}/edit', [App\Http\Controllers\PageController::class, 'edit'])->name('edit');

Auth::routes();

// AJAX ROUTES
Route::put('/section/{section}', [App\Http\Controllers\EditController::class, 'editSection']);
Route::put('/page/{page}', [App\Http\Controllers\EditController::class, 'editPage']);
Route::put('/page/{page}/sections', [App\Http\Controllers\EditController::class, 'editSectionsSequence']);

Route::post('/version/{version}/page/{page}/section', [App\Http\Controllers\EditController::class, 'addSection']);

Route::delete('/section/{section}', [App\Http\Controllers\EditController::class, 'deleteSection']);
