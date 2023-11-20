<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WelcomeController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

    Route::get('criar-aluno', [StudentController::class, 'create'])->name('student.create');
    Route::post('criar-aluno', [StudentController::class, 'store'])->name('student.store');
    Route::get('alunos', [StudentController::class, 'students'])->name('students');
    Route::get('alunos/filter', [StudentController::class, 'filter'])->name('students.filter');
    Route::delete('aluno-delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
    Route::get('aluno/editar/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('aluno-update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('aluno/visualizar/{id}', [StudentController::class, 'view'])->name('student.view');

    Route::get('criar-escola', [SchoolController::class, 'create'])->name('school.create');
    Route::post('criar-escola', [SchoolController::class, 'store'])->name('school.store');
    Route::get('schools', [SchoolController::class, 'schools'])->name('schools');
    Route::get('school/filter', [SchoolController::class, 'filter'])->name('school.filter');
    Route::get('school/editar/{id}', [SchoolController::class, 'edit'])->name('school.edit');
    Route::put('school-update/{id}', [SchoolController::class, 'update'])->name('school.update');
    Route::get('school/visualizar/{id}', [SchoolController::class, 'view'])->name('school.view');
    Route::delete('school-delete/{id}', [SchoolController::class, 'delete'])->name('school.delete');

});

require __DIR__ . '/auth.php';
