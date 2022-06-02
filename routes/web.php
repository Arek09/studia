<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeDataController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\categoryController;
use \App\Http\Controllers\UsersController;

Route::get('/login', [AuthController::class,'login']);
Route::get('/register', [AuthController::class,'registration']);
Route::post('/register-employe', [AuthController::class,'registerEmploye'])->name('register-employe');
Route::post('/login-employe', [AuthController::class,'loginEmploye'])->name('login-employe');


Route::get('/dashboard', [AuthController::class,'dashboard'])->middleware('isLogin');
Route::get('/logout', [AuthController::class,'logout']);

Route::get('/table', [AddProductController::class,'show']);


Route::get('/account', [AuthController::class,'account'])->middleware('isLogin');
Route::get('/add', [AuthController::class,'add'])->middleware('isLogin');

Route::put('update-data/{id}', [EmployeDataController::class,'update']);

Route::put('/add/{id}', [AddProductController::class,'store']);

Route::get('/delete/{id}', [AddProductController::class,'destroy']);

//Route::get('/edit', [AddProductController::class,'edit']);
Route::get('/edit/{id}', [AddProductController::class,'edit']);
Route::put('edit/put/{id}', [AddProductController::class,'updateProduct']);

Route::get('/users', [UsersController::class,'index']);
Route::get('/users/{id}', [UsersController::class,'show']);
Route::put('/update-user/{id}',[UsersController::class, 'edit']);
Route::get('/delete-user/{id}', [UsersController::class,'destroy']);
Route::get('/user', [UsersController::class,'showCreate']);
Route::post('/create-user', [UsersController::class,'create'])->name('create-user');



//Route określające kategorie
Route::get('category',[categoryController::class,'viewCategory']);