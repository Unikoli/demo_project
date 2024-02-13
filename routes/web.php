<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
Route::get('/',[TaskController::class,'index']);
Route::get('/add-task',[TaskController::class,'create']);
Route::get('/edit-task',[TaskController::class,'edit']);


    

// Route::get('/',function(){
//     return view('welcome');
// });
// Route::get('/',function(){
//     return view('index');
// });
