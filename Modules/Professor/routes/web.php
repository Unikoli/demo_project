<?php

use Illuminate\Support\Facades\Route;
use Modules\Professor\App\Http\Controllers\ProfessorController;

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

// Route::group([], function () {
//     Route::resource('professor', ProfessorController::class)->names('professor');
// });
Route::get('/all-task',[ProfessorController::class,'index']);
Route::get('/add-task',[ProfessorController::class,'create']);
Route::post('/add-task',[ProfessorController::class,'store']);
Route::get('/edit-task/{id}',[ProfessorController::class,'edit']);
Route::post('/edit-task/{id}',[ProfessorController::class,'update']);
Route::get('delete-task/{id}',[ProfessorController::class,'destroy']);