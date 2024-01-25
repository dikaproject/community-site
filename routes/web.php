<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminUserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/* admin routes */
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin_login');
    Route::post('/login-submit', [AdminController::class, 'login_submit'])->name('admin_login_submit');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');
    Route::get('/forget-password', [AdminController::class, 'forget_password'])->name('admin_forget_password');
    Route::post('/forget-password-submit', [AdminController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
    Route::get('/reset-password/{token}/{email}', [AdminController::class, 'reset_password'])->name('admin_reset_password');
});


/* admin crud routes */

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/kelolauser', [AdminUserController::class, 'index'])->name('admin.kelolauser.index');
    Route::get('/admin/kelolauser/create', [AdminUserController::class, 'create'])->name('admin.kelolauser.create');
    Route::post('/admin/kelolauser', [AdminUserController::class, 'store'])->name('admin.kelolauser.store');
    Route::get('/admin/kelolauser/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.kelolauser.edit');
    Route::put('/admin/kelolauser/{user}', [AdminUserController::class, 'update'])->name('admin.kelolauser.update');
    Route::delete('/admin/kelolauser/{user}', [AdminUserController::class, 'destroy'])->name('admin.kelolauser.destroy');
});
