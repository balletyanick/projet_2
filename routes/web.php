<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




//Admin All Route
Route::controller(AdminController::class)->group(function () {
    Route::get('/logout', 'destroy')->name('admin.logout');
    Route::get('/profile', 'Profile')->name('admin.profile');
    Route::get('/edit_profile', 'EditProfile')->name('admin.edit_profile');
    Route::post('update_profile', 'UpdateProfile')->name('store.profile');

    Route::get('/edit_password', 'EditPassword')->name('admin.edit_password');
    Route::post('update_password', 'UpdatePassword')->name('update.password');






});





