<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\AnnouncementController;
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

Route::get('/',[AllUserController::class, 'homepage'])->name('homepage');
Route::get('/welcome',[AllUserController::class, 'welcome']);

Route::get('google-autocomplete', [GoogleController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/announcement/user',[AnnouncementController::class, 'announcements'])->middleware(['auth', 'verified'])->name('announcements');
Route::delete('/announcement/user/{id}',[AnnouncementController::class, 'destroy'])->middleware(['auth', 'verified']);
Route::get('/announcement/edit/{id}',[AnnouncementController::class, 'edit'])->middleware(['auth', 'verified']);
Route::post('/announcement/update/{id}',[AnnouncementController::class, 'update'])->middleware(['auth', 'verified']);
Route::delete('/delete/users/{id}',[MasterController::class, 'destroy'])->middleware(['auth', 'verified']);
Route::get('/add/users', [MasterController::class, 'adduser'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/store/user', [MasterController::class, 'storeUser'])->middleware(['auth', 'verified']);
Route::get('/show/users', [MasterController::class, 'show'])->middleware(['auth', 'verified']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
