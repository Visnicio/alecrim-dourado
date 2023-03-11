<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;

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
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('welcome');
});


Route::get('/login', function() {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);


Route::get('/dashboard', function () {
    $username = Auth::user()->name;
    return view('dashboard', ['username' => $username]);
});


Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/new', function(){

    $classrooms = Classroom::where('company_id', Auth::user()->company_id)->get();
    return view('students.student', ['classrooms' => $classrooms]);

    return view('students.student');
});
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::post('/students', [StudentController::class, 'create']);
Route::put('/students/{id}', [StudentController::class, 'update']);

Route::get('/classrooms', [ClassroomController::class, 'index']);
Route::get('/classrooms/new', function(){
    return view('classrooms.classroom');
});
Route::get('/classrooms/{id}', [ClassroomController::class, 'show']);
Route::post('/classrooms', [ClassroomController::class, 'create']);

