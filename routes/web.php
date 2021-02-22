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

Route::get('/', [App\Http\Controllers\HomeController::class, "welcome"])->name("welcome");

Route::get('/docs/{version:title?}', [App\Http\Controllers\HomeController::class, 'redirect'])->name('redirect');

Route::get('/docs/{version:title}/{page:title}', [App\Http\Controllers\HomeController::class, 'docs'])->name('docs');
Route::get('/docs/{version:title}/{page:title}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');

Auth::routes();

// AJAX ROUTES
Route::put('/section/{section}', [App\Http\Controllers\SectionController::class, 'editSection']);
Route::put('/page/{page}/sections', [App\Http\Controllers\SectionController::class, 'editSectionSequence']);
Route::put('/page/{page}', [App\Http\Controllers\PageController::class, 'editPage']);
Route::put('/category/{category}', [App\Http\Controllers\CategoryController::class, 'editCategory']);

Route::post('/version/{version}/page/{page}/section', [App\Http\Controllers\SectionController::class, 'addSection']);

Route::delete('/section/{section}', [App\Http\Controllers\SectionController::class, 'deleteSection']);
