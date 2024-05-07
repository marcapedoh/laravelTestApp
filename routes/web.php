<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('students.home');
});
Route::get("/students/create",[StudentController::class,"create"])->name('students.create');
Route::post("/students",[StudentController::class,"store"])->name('students.store');
Route::post('/test',function(Request $request){dd($request->all());})->name('test');
Route::get('/collection/students/store',[StudentController::class,"index"])->name('students.collection');
Route::put("/students/update/{id}",[StudentController::class,"update"])->name("students.update");