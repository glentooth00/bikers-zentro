<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;

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

Route::get('/', [UsersController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [UsersController::class, 'authenticate'])->name('login.custom');

Route::middleware(['auth'])->group(function () {
    // Dashboard route
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Logout route
    Route::post('/logout', [UsersController::class, 'logout'])->name('logout');

    // Inventory route
    Route::get('/admin/inventory', [UsersController::class, 'inventory'])->name('inventory');

    // Delivery routes
    Route::get('/admin/delivery', [DeliveryController::class, 'index'])->name('delivery.index');
    Route::get('/admin/delivery/create', [DeliveryController::class, 'create'])->name('delivery.create');
    Route::post('/admin/delivery', [DeliveryController::class, 'store'])->name('delivery.store');
    Route::get('/admin/delivery/{delivery}', [DeliveryController::class, 'show'])->name('delivery.show');
    Route::get('/admin/delivery/{delivery}/edit', [DeliveryController::class, 'edit'])->name('delivery.edit');
    Route::put('/admin/delivery/{delivery}', [DeliveryController::class, 'update'])->name('delivery.update');
    Route::delete('/admin/delivery/{delivery}', [DeliveryController::class, 'destroy'])->name('delivery.destroy');
});



// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
