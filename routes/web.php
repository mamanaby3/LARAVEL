<?php

use \App\Http\Controllers\UniteEController;
use \App\Http\Controllers\MatiereController;
use App\Http\Controllers\ApprenantController;
use \App\Http\Controllers\NoteController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/students", [ApprenantController::class, "index"])->name('students.index');
// Route::get('/students/{id}', [ApprenantController::class, "show"])->name('students.show');
Route::get("/matieres", [MatiereController::class, "index"])->name('matieres.index');
Route::get("/notes", [NoteController::class, "index"])->name('notes.index');
Route::get("/UE", [UniteEController::class, "index"])->name('ue.index');
Route::get("/students/new", [ApprenantController::class, "create"])->name('students.create');
Route::post("/students/store", [ApprenantController::class, "store"])->name('students.store');
Route::get("/students/modifier/{id}", [ApprenantController::class, "modifier"])->name('students.edit');
Route::put("/students/update/{id}", [ApprenantController::class, "update"])->name('students.update');
Route::delete("/students/delete/{id}", [ApprenantController::class, "delete"])->name('students.delete');