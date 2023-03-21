<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name("home");
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name("about");
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name("projects");


Route::middleware('auth')
  ->prefix('admin')
  ->name('admin.')
  ->group(function () {
    Route::get('/', function () {
      return view('admin.dashboard');
    })->name('dashboard');
    
    Route::resource("projects", App\Http\Controllers\Admin\ProjectController::class)->except(['show']);
    Route::resource("experiences", App\Http\Controllers\Admin\ExperienceController::class)->except(['show']);
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  });

require __DIR__ . '/auth.php';
