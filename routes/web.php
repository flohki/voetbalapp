<?php

use App\Http\Controllers\CalenderController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\RankingController;
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

Route::view('/', 'home')->name('home');

Route::get('/rankings', [RankingController::class, 'index'])->name('rankings.index');
Route::get('/rankings/create', [RankingController::class, 'create'])->name('rankings.create');
Route::post('/rankings', [RankingController::class, 'store'])->name('rankings.store');
Route::get('/rankings/{ranking}/edit', [RankingController::class, 'edit'])->name('rankings.edit');
Route::delete('/rankings/{ranking}', [RankingController::class, 'destroy'])->name('rankings.destroy');
Route::put('/rankings/{ranking}', [RankingController::class, 'update'])->name('rankings.update');

Route::get('/calenders', [CalenderController::class, 'index'])->name('calenders.index');
Route::get('/calenders/create', [CalenderController::class, 'create'])->name('calenders.create');
Route::post('/calenders', [CalenderController::class, 'store'])->name('calenders.store');
Route::get('/calenders/{calender}/edit', [CalenderController::class, 'edit'])->name('calenders.edit');
Route::delete('/calenders/{calender}', [CalenderController::class, 'destroy'])->name('calenders.destroy');
Route::put('/calenders/{calender}', [CalenderController::class, 'update'])->name('calenders.update');

Route::get('/goals', [GoalsController::class, 'index'])->name('goals.index');
Route::get('/goals/create', [GoalsController::class, 'create'])->name('goals.create');
Route::post('/goals', [GoalsController::class, 'store'])->name('goals.store');
Route::get('/goals/{goal}/edit', [GoalsController::class, 'edit'])->name('goals.edit');
Route::delete('/goals/{goal}', [GoalsController::class, 'destroy'])->name('goals.destroy');
Route::put('/goals/{goal}', [GoalsController::class, 'update'])->name('goals.update');


Route::get('/cards', [CardsController::class, 'index'])->name('cards.index');
Route::get('/cards/create', [CardsController::class, 'create'])->name('cards.create');
Route::post('/cards', [CardsController::class, 'store'])->name('cards.store');
Route::get('/cards/{card}/edit', [CardsController::class, 'edit'])->name('cards.edit');
Route::delete('/cards/{card}', [CardsController::class, 'destroy'])->name('cards.destroy');
Route::put('/cards/{card}', [CardsController::class, 'update'])->name('cards.update');