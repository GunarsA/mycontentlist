<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\RatingController;

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

Route::resource('content', ContentController::class);
// Route::resource('character', CharacterController::class);
Route::resource('genre', GenreController::class);
Route::resource('staff', StaffController::class);
Route::resource('studio', StudioController::class);
Route::resource('user', ProfileController::class);
Route::resource('character', CharacterController::class);
Route::resource('rating', RatingController::class, ['except' => ['create', 'edit', 'show']]);
Route::get('rating/create/{content_slug}', [RatingController::class, 'create'])->name('rating.create');
Route::get('rating/edit/{rating_id}', [RatingController::class, 'edit'])->name('rating.edit');
Route::get('rating/{username}/{rating_id}', [RatingController::class, 'show'])->name('rating.show');


Route::get('/', function () {
    return redirect('content');
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
