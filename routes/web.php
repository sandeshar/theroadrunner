<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class, 'index'])->name('gallery.index');
Route::get('/gallery', [AdminController::class, 'showgallery'])->name('gallery');

Route::middleware(['guest'])->group(function () {

    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'log']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
	Route::post('/admin/image/upload', [AdminController::class, 'uploadImage'])->name('image.upload');
	Route::delete('/admin/image/delete/{id}', [AdminController::class, 'deleteImage'])->name('image.delete');
	Route::get('/admin/trash', [AdminController::class, 'trash'])->name('image.trash');
	Route::patch('/admin/image/restore/{id}', [AdminController::class, 'restoreImage'])->name('image.restore');
	Route::delete('/admin/image/delete-permanently/{id}', [AdminController::class, 'deletePermanently'])->name('image.delete-permanently');
	Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

});

