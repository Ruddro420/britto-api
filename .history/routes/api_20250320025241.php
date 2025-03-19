<?php

use App\Http\Controllers\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// category routes
Route::post('/category/add', [Course::class, 'addCategory']); 
Route::get('/category/get', [Course::class, 'getCategory']); 
// course routes
Route::post('/course/add', [Course::class, 'addCourse']); 
Route::get('/course/get', [Course::class, 'getCourse']);
// module routes
Route::post('/module/add', [Course::class, 'addModule']);
Route::get('/module/get', [Course::class, 'getModule']);