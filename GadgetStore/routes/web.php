<?php

use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CartController;

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

Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('/productdetails/{id}', [FrontendController::class, 'singleProduct'])->name('single.product');

Route::get('/dashboard', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/product/add', [ProductController::class, 'add'])->middleware(['auth', 'verified'])->name('add.product');
Route::post('/dashboard/product/store', [ProductController::class, 'store'])->middleware(['auth', 'verified'])->name('store.product');
Route::get('/dashboard/product/show', [ProductController::class, 'show'])->middleware(['auth', 'verified'])->name('show.product');
Route::get('/dashboard/product/edit/{id}', [ProductController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit.product');
Route::post('/dashboard/product/update/{id}', [ProductController::class, 'update'])->middleware(['auth', 'verified'])->name('update.product');
Route::get('/dashboard/product/delete/{id}', [ProductController::class, 'delete'])->middleware(['auth', 'verified'])->name('delete.product');
// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

//cart
Route::get('/cart', [CartController::class, 'cartinfo'])->name('show.cart');
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart/remove/{rowId}', [CartController::class, 'destroy'])->name('remove.cart');


require __DIR__ . '/auth.php';
