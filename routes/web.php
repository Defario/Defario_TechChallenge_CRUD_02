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

Route::get('/create', [StudentController::class, 'getCreatePage']) -> name('getCreatePage');

Route::post('/create-student', [StudentController::class, 'createStudent']) -> name('createStudent');

Route::get('/get-students', [StudentController::class, 'getStudents']) -> name('getStudents');

Route::get('/update-student/{id}', [StudentController::class, 'getStudentById']) -> name('getStudentById');

Route::patch('/update-student/{id}', [StudentController::class, 'updateStudent']) -> name('updateStudent');

Route::delete('/delete-student/{id}', [StudentController::class, 'deleteStudent']) -> name('delete');
