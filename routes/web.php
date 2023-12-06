<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BoissonsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


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
// web.php



Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('boissons', BoissonsController::class);
Route::get('admin/boissons', [BoissonsController::class, 'boissons'])->name('admin.boissons');
Route::get('/boissons/{boisson}/edit', [BoissonsController::class, 'edit'])->name('admin.edit');
Route::get('edit', [BoissonsController::class, 'edit'])->name('edit');
Route::get('index', [BoissonsController::class, 'index'])->name('admin.index');
Route::get('/admin/show/{boisson}', [BoissonsController::class, 'show'])->name('admin.show');
Route::get('ajout_boisson', [BoissonsController::class, 'ajout_boisson'])->name('admin.ajout_boisson');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function(){
    if(! Gate::allows('access-admin')){
        return view('not_admin');
    }
    return view('admin.admin');
});

require __DIR__.'/auth.php';
