<?php

use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('task', 'TaskController');
Route::resource('', TaskController::class);
Route::post('task/save', 'App\Http\Controllers\TaskController@taskSave')->name('task.save');

// Route::post('task', function(){
//     dd('test');
// });

