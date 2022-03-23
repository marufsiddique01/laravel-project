<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

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


// Route::get('/projects', [ProjectController::class, 'show']);
// Resource route follows the created file path according to the paths and methods from controller

// Route::resource('projects', ProjectController::class);
Route::resource('projects', ProjectController::class);


