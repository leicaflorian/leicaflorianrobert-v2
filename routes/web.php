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
Route::get('/cookie_policy', fn() => view("cookies"))->name("cookies");
Route::get('/privacy_policy', fn() => view("privacy"))->name("privacy");

Route::middleware('auth')
  ->prefix('admin')
  ->name('admin.')
  ->group(function () {
    Route::get('/', function () {
      return view('admin.dashboard');
    })->name('dashboard');
    
    Route::resource("projects", App\Http\Controllers\Admin\ProjectController::class)->except(['show']);
    Route::resource("experiences", App\Http\Controllers\Admin\ExperienceController::class)->except(['show']);
    Route::resource("contacts", App\Http\Controllers\Admin\ContactController::class)->only(['index', 'show']);
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  });

/*Route::get('/mailable', function () {
  $contact   = App\Models\Contact::first();
  $adminUser = App\Models\User::first();
  
//  return new App\Mail\ContactSentUser($contact);
  return new App\Mail\ContactReceivedAdmin($contact, $adminUser);
});*/

require __DIR__ . '/auth.php';
