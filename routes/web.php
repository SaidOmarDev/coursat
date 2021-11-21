<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Course;
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

Route::get('/', [function () {
    return view('home', [
        'courses' => Course::all()
    ]);
}]);

Route::get('courses', [CourseController::class, 'index']);
Route::get('courses/{course:slug}', [CourseController::class, 'show']);

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'create']);
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');
