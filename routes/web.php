<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\CalenderController;

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

// Home Route
Route::view('/', 'home')->name('home');

// Dashboard Route
Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes
require __DIR__.'/auth.php';

// Club Routes
Route::get('/club', [ClubController::class, 'index'])->name('club.index');
Route::get('/club/contact', [ClubController::class, 'contact'])->name('club.contact');
Route::post('/club/contact', [ClubController::class, 'submitContact'])->name('club.submitContact');

// Rankings Routes
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/rankings/create', [RankingController::class, 'create'])->name('rankings.create');
Route::post('/rankings', [RankingController::class, 'store'])->name('rankings.store');
Route::get('/rankings/{ranking}/edit', [RankingController::class, 'edit'])->name('rankings.edit');
Route::delete('/rankings/{ranking}', [RankingController::class, 'destroy'])->name('rankings.destroy');
Route::put('/rankings/{ranking}', [RankingController::class, 'update'])->name('rankings.update');
});
Route::get('/rankings', [RankingController::class, 'index'])->name('rankings.index');

// Calender Routes
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/calenders/create', [CalenderController::class, 'create'])->name('calenders.create');
Route::post('/calenders', [CalenderController::class, 'store'])->name('calenders.store');
Route::get('/calenders/{calender}/edit', [CalenderController::class, 'edit'])->name('calenders.edit');
Route::delete('/calenders/{calender}', [CalenderController::class, 'destroy'])->name('calenders.destroy');
Route::put('/calenders/{calender}', [CalenderController::class, 'update'])->name('calenders.update');
});
Route::get('/calenders', [CalenderController::class, 'index'])->name('calenders.index');

// Goals Routes
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/goals/create', [GoalsController::class, 'create'])->name('goals.create');
Route::post('/goals', [GoalsController::class, 'store'])->name('goals.store');
Route::get('/goals/{goal}/edit', [GoalsController::class, 'edit'])->name('goals.edit');
Route::delete('/goals/{goal}', [GoalsController::class, 'destroy'])->name('goals.destroy');
Route::put('/goals/{goal}', [GoalsController::class, 'update'])->name('goals.update');
});
Route::get('/goals', [GoalsController::class, 'index'])->name('goals.index');

// Cards Routes
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/cards/create', [CardsController::class, 'create'])->name('cards.create');
Route::post('/cards', [CardsController::class, 'store'])->name('cards.store');
Route::get('/cards/{card}/edit', [CardsController::class, 'edit'])->name('cards.edit');
Route::delete('/cards/{card}', [CardsController::class, 'destroy'])->name('cards.destroy');
Route::put('/cards/{card}', [CardsController::class, 'update'])->name('cards.update');
});
Route::get('/cards', [CardsController::class, 'index'])->name('cards.index');