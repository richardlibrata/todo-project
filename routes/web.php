<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

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

//homepage todo route
Route::get('/',[todoController::class, 'index'])->name("todo.home");

//create todo route
Route::get('/create', function () {
    return view('create');
})->name("todo.create");

//edit todo route
Route::get('/edit/{id}',[todoController::class,'edit'])->name("todo.edit");

//update todo route
Route::post('/update', [todoController::class,'updateData'])->name("todo.updateData");

//store todo route
Route::post('/create', [todoController::class,'store'])->name("todo.store");

//delete toto route
Route::get('/delete/{id}', [todoController::class,'delete'])->name("todo.delete");
