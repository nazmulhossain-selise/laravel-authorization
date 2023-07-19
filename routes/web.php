<?php

use App\Http\Controllers\AnswerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;

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
    return redirect('/dashboard');
});

Route::get('/dashboard', [QuestionController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/question/{id}', [QuestionController::class, 'show'])->middleware(['auth', 'verified'])->name('questions.show');

Route::post('/answer/{id}/correct', [AnswerController::class, 'correct'])->middleware(['auth', 'verified'])->name('answer.correct');
Route::post('/answer/{id}/best', [AnswerController::class, 'best'])->middleware(['auth', 'verified'])->name('answer.best');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
