<?php

use App\Http\Controllers\StudentController;
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

//Atsakingi uz atvaizdavima
Route::get('/students/index',[StudentController::class, 'index'])->name('students.index');
Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');
Route::get('/students/edit/{student}',[StudentController::class, 'edit'])->name('students.edit');
Route::get('/students/show/{student}',[StudentController::class, 'show'])->name('students.show');
Route::get('/students/projectlist',[StudentController::class, 'projectList'])->name('students.projectlist');

//Atsakingi uz duomenu apdorojima
//store - issaugoti nauja studenta
//destroy - istrinti studenta

Route::post('/students/store',[StudentController::class, 'store'])->name('students.store');
//destroy metodas reikalauja atpazinti studenta
// {student} - per nuoroda studenta
Route::post('/students/destroy/{student}',[StudentController::class, 'destroy'])->name('students.destroy');
Route::post('/students/update/{student}',[StudentController::class, 'update'])->name('students.update');

//Custom metodas
Route::post('/students/deleteall',[StudentController::class, 'deleteAll'])->name('students.deleteall');



