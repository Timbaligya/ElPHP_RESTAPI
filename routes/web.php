<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/student/all', [StudentController::class, 'getAllStudents']);
Route::get('/student/{id}', [StudentController::class, 'getStudentById']);
Route::post('/student/add', [StudentController::class, 'addStudent']);
Route::put('/student/update/{id}', [StudentController::class, 'updateStudent']);
Route::delete('/student/delete/{id}', [StudentController::class, 'deleteStudent']);
