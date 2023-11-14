<?php

use App\Http\Controllers\Backend\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::prefix('product')->group(function(){
    Route::get('/view', [ProductsController::class, 'ProductView'])->name('products.view');
    Route::get('/add', [ProductsController::class, 'ProductAdd'])->name('products.add');
    Route::post('/store', [ProductsController::class, 'ProductStore'])->name('products.store');
    Route::get('/edit/{id}', [ProductsController::class, 'ProductEdit'])->name('products.edit');
    Route::post('/update/{id}', [ProductsController::class, 'ProductUpdate'])->name('products.update');
    Route::get('/delete/{id}', [ProductsController::class, 'ProductDelete'])->name('products.delete');
});
