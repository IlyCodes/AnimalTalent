<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('animals', AnimalController::class);
Route::get('animals/owner/{id}', [AnimalController::class, 'ownerIndex'])->name('owner_index');
Route::get('/owners', [AnimalController::class, 'owners'])->name('owners');
Route::view('/aboutUs', 'animal.aboutUs')->name('about_us');
Route::get('/add-new-animal', [AnimalController::class, 'addNewAnimal'])->name('add_new_animal');
Route::post('/add-new-animal', [AnimalController::class, 'addAnimal'])->name('add_animal');
Route::post('/search', [AnimalController::class, 'search'])->name('search');
Route::get('/competitions', [AnimalController::class, 'competitions'])->name('competitions');
Route::get('/competition/{id}', [AnimalController::class, 'showCompetition'])->name('show_competition');
Route::get('/judge', [AnimalController::class, 'createJudge'])->name('create_judge');
Route::get('/judge/{id}', [AnimalController::class, 'showJudge'])->name('show_judge');
Route::post('/judge', [AnimalController::class, 'storeJudge'])->name('store_judge');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('dashboard/animals', [adminController::class, 'animals'])->name('animals');
    Route::get('dashboard/judges', [adminController::class, 'judges'])->name('judges');
    Route::get('dashboard/competitions', [adminController::class, 'competitions'])->name('admin_competitions');
    Route::get('dashboard/competitions/create', [adminController::class, 'createCompetition'])->name('create_competition');
    Route::get('dashboard/competition/{id}/edit', [adminController::class, 'editCompetition'])->name('edit_competition');
    Route::put('dashboard/competition/{id}/edit', [adminController::class, 'updateCompetition'])->name('update_competition');
    Route::post('dashboard/competitions/create', [adminController::class, 'storeCompetition'])->name('store_competition');
    Route::delete('dashboard/animals/{id}', [adminController::class, 'animalDestroy'])->name('animals.destroy');
    Route::delete('dashboard/competitions/{id}', [adminController::class, 'competitionDestroy'])->name('competitions.destroy');
    Route::delete('dashboard/judges/{id}', [adminController::class, 'judgeDestroy'])->name('judges.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
