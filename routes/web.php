<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProfileController::class,"allposts"])
->middleware(['auth', 'verified'])->name('dashboard');

/////////////////////////////////////////////////////
Route::get('/account/{id}', [ProfileController::class, "index"])->name('profile.index');
Route::get('/post/{post}', [PostsController::class, "show"])->name('post.show');

/////////////////////////PROFILE///////////////////////////
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/{id}/edit', [SettingController::class, 'editSetting'])->name('profile.editSetting');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/{id}', [SettingController::class, 'updateSetting'])->name('profile.update.setting');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
///////////////////////POSTS CREATE/////////////////////////////
Route::middleware('auth')->group(function () {
    Route::get('p/',[PostsController::class,"create"])->name('post.create');
    Route::post( 'p/',[PostsController::class,"store"])->name('post.store');

});



require __DIR__ . '/auth.php';
