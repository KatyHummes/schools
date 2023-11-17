<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
    Route::get('criar-aluno', [StudentController::class, 'create'])->name('student.create');
    Route::post('criar-aluno', [StudentController::class, 'store'])->name('student.store');
    Route::get('alunos', [StudentController::class, 'students'])->name('students');
    Route::get('alunos/filter', [StudentController::class, 'filter'])->name('students.filter');
    Route::delete('delete/{id}', [StudentController::class, 'delete'])->name('delete');
    Route::get('aluno/editar/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [StudentController::class, 'update'])->name('update');
    Route::get('aluno/visualizar/{id}', [StudentController::class, 'view'])->name('view');
    // Route::get('escolas', [])
});

require __DIR__ . '/auth.php';
