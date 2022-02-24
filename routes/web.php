<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/form', [StudentController::class, 'create'])->name('new-student');
Route::get('/manage-student', [StudentController::class, 'manage'])->name('manage-student');
Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('edit-student');
Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage-blog');
Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('edit-blog');
Route::post('/new-blog', [BlogController::class, 'newBlog'])->name('new-blog');
