<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/student/all', [StudentController::class, 'getAllStudents']);
Route::get('/student/{id}', [StudentController::class, 'getStudentById']);
Route::post('/student/add', [StudentController::class, 'addStudent']);
Route::put('/student/update/{id}', [StudentController::class, 'updateStudent']);
Route::delete('/student/delete/{id}', [StudentController::class, 'deleteStudent']);