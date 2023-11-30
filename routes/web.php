<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
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

Route::get('/',[TaskController::class,'index'])->name('task');
// Route::get('/task',[TaskController::class,'index'])->name('task');
Route::post('/task',[TaskController::class,'insert']);
Route::post('/task_delete',[TaskController::class,'task_delete'])->name('task_delete');
Route::post('/cat_getById',[TaskController::class,'cat_getById'])->name('cat_getById');
Route::post('/update_task',[TaskController::class,'update']);
Route::post('/delete_task',[TaskController::class,'delete']);
Route::post('/change_status',[TaskController::class,'change_status'])->name('change_status');
