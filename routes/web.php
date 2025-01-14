<?php

use App\Http\Controllers\TaskController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/tasks', [TaskController::class,'index'])->name('tasks');
Route::get('/tasks/create', [TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class,'store'])->name('tasks.store');
Route::get('/tasks/{task}', [TaskController::class,'show'])->name('tasks.show');
Route::get('/tasks/{task}/edit', [TaskController::class,'edit'])->name('tasks.edit');
Route::post('/tasks/{task}', [TaskController::class,'update'])->name('tasks.update');
Route::get('/tasks/{task}', [TaskController::class,'destroy'])->name('tasks.destroy');

require __DIR__.'/auth.php';
