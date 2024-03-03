<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PostController;


//task routes
Route::get('/all-task',[TaskController::class,'index']);
Route::get('/add-task',[TaskController::class,'create']);
Route::post('/add-task',[TaskController::class,'store']);
Route::get('edit-task/{id}',[TaskController::class,'update']);
Route::get('delete-task/{id}',[TaskController::class,'destroy']);

//post routes
Route::get('/all-post',[PostController::class,'index']);
Route::get('/add-post', [PostController::class, 'create']);
Route::post('/add-post', [PostController::class, 'store']);

    

// Route::get('/',function(){
//     return view('welcome');
// });
// Route::get('/',function(){
//     return view('index');
// });
