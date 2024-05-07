<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NieuwsController;
use App\Http\Controllers\WedstrijdenController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route voor de clubpagina
Route::get('/club', [ClubController::class, 'index'])->name('club');
Route::get('/club/info', [ClubController::class, 'info'])->name('club.info');
Route::get('/club/terreinen', [ClubController::class, 'terreinen'])->name('club.terreinen');
Route::get('/club/feestzaal', [ClubController::class, 'feestzaal'])->name('club.feestzaal');
Route::get('/club/contact', [ClubController::class, 'contact'])->name('club.contact');

// Route voor de nieuwspagina
Route::get('/nieuws', [NieuwsController::class, 'index'])->name('nieuws');

// Route voor de wedstrijdenpagina
Route::get('/wedstrijden', [WedstrijdenController::class, 'index'])->name('wedstrijden');
Route::get('/wedstrijden/kalender', [WedstrijdenController::class, 'kalender'])->name('wedstrijden.kalender');
Route::get('/wedstrijden/klassement', [WedstrijdenController::class, 'klassement'])->name('wedstrijden.klassement');
Route::get('/wedstrijden/reserven', [WedstrijdenController::class, 'reserven'])->name('wedstrijden.reserven');
Route::get('/wedstrijden/tegenstanders', [WedstrijdenController::class, 'tegenstanders'])->name('wedstrijden.tegenstanders');
// Route voor de mediapagina
Route::get('/media', [MediaController::class, 'index'])->name('media');
Route::get('/add-data', [DataController::class, 'showForm'])->name('add-data.form');
Route::post('/add-data', [DataController::class, 'addData'])->name('add-data');