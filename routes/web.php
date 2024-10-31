<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/login/page' ,[AdminLoginController::class, 'loginShow' ])->middleware('auth')->name('loginpage');
Route::any('/login/page' ,[AdminLoginController::class, 'Login' ])->middleware('auth')->name('login');
Route::get('/logout', [AdminLoginController::class, 'logOut' ])->middleware('auth')->name('logout');
Route::get('/users', [UserController::class, 'index' ])->middleware('auth')->name('users');
Route::get('/books', [BookController::class, 'books' ])->middleware('auth')->name('books');
Route::any('/createBook', [BookController::class, 'Create' ])->middleware('auth')->name('CreateBook');
Route::any('/storeBook', [BookController::class, 'storeBook' ])->middleware('auth')->name('storeBook');
Route::any('/updateBookform/{id}', [BookController::class, 'show' ])->middleware('auth')->name('show');
Route::any('/updateBook/{id}', [BookController::class, 'updateBook'])->middleware('auth')->name('books.update');
Route::any('/BookDelete/{id}', [BookController::class, 'BookDelete' ])->middleware('auth')->name('BookDelete'); 
//routes for user dashboard
Route::any('/Userbook', [BookController::class, 'Userbook' ])->middleware('auth')->name('Userbook'); 
Route::any('/Userbook/{id}', [BookController::class, 'userUpdateBook' ])->middleware('auth')->name('userUpdateBook'); 





Route::middleware('auth')->group(function () {
Route::any('/admin/login' ,[AdminLoginController::class, 'adminLogin' ])->name('adminLogin');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



//user routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 