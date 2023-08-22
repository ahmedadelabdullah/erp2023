<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\ProfileController;
use App\Models\admin\AdminRegister;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Route::namespace('\App\Http\Controllers\Admin')->prefix('admin')->group(function (){
//    Route::resource('admin' , AdminController::class);
//});


Route::namespace('\App\Http\Controllers\Admin')->name('admin.')->prefix('admin')->group(function (){
//    Route::resource('/dashboard' , AdminController::class);
    Route::middleware('Admin')->group(function (){
    Route::view('/dashboard' , 'admin.index')->name('dashboard');
    });

    require __DIR__.'/admin_auth.php';
});



//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});


