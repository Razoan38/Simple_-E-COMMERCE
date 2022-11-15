<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/details/{id}', [HomeController::class, 'details'])->name('product.details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/product/add', [ProductController::class, 'index'])->name('admin.product.add');
    Route::get('/admin/product/manage', [ProductController::class, 'manage'])->name('admin.product.manage');
    Route::post('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');

                                        // User Routes
    Route::get('/admin/user/add', [UserController::class, 'index'])->name('admin.user.add');
    Route::get('/admin/user/manage', [UserController::class, 'manage'])->name('admin.user.manage');
    Route::post('/admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    
});
