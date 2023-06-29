<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;

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
    return redirect('content');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('character', CharacterController::class, ['only' => ['create', 'edit', 'destroy']]);
    Route::resource('content', ContentController::class, ['only' => ['create', 'edit']]);
    Route::resource('genre', GenreController::class, ['only' => ['create', 'edit']]);
    Route::resource('rating', RatingController::class, ['only' => ['edit']]);
    Route::get('/rating/create/{content_id}', [RatingController::class, 'create'])->name('rating.create');
    Route::resource('staff', StaffController::class, ['only' => ['create', 'edit']]);
    Route::resource('studio', StudioController::class, ['only' => ['create', 'edit']]);

    Route::post('/user/changeModStatus/{id}', [UserController::class, 'changeModStatus'])->name('user.changeModStatus');
});

Route::resource('character', CharacterController::class, ['except' => ['create', 'edit']]);
Route::resource('content', ContentController::class, ['except' => ['create', 'edit']]);
Route::resource('genre', GenreController::class, ['except' => ['create', 'edit']]);
Route::resource('rating', RatingController::class, ['except' => ['create', 'edit']]);
Route::resource('staff', StaffController::class, ['except' => ['create', 'edit']]);
Route::resource('studio', StudioController::class, ['except' => ['create', 'edit']]);

Route::resource('user', UserController::class, ['only' => ['index', 'show', 'destroy']]);

// Route::group(['middleware' => ['auth', 'setLocale']], function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::resource('character', CharacterController::class, ['only' => ['create', 'edit', 'destroy']]);
//     Route::resource('content', ContentController::class, ['only' => ['create', 'edit']]);
//     Route::resource('genre', GenreController::class, ['only' => ['create', 'edit']]);
//     Route::resource('rating', RatingController::class, ['only' => ['edit']]);
//     Route::get('/rating/create/{content_id}', [RatingController::class, 'create'])->name('rating.create');
//     Route::resource('staff', StaffController::class, ['only' => ['create', 'edit']]);
//     Route::resource('studio', StudioController::class, ['only' => ['create', 'edit']]);
// });

// Route::get('/{locale}', function ($locale) {
//     app()->setLocale($locale);
// })->name('change_locale');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

require __DIR__.'/auth.php';
