<?php

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

use App\Http\Controllers\EventController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/',[EventController::class, 'index']);

Route::get('/events/create',[EventController::class, 'create'])->middleware('auth'); //Create
Route::get('/events/{id}',[EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']); //Send Post
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth'); //Delete
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth'); // Edit
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth'); //Update

Route::get('/login/login',[EventController::class, 'login']);

Route::get('/dashboard',[EventController::class, 'dashboard'])->middleware('auth');

Route::get('/login/register',[EventController::class, 'register']);

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth'); //Join Event
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');//Exit Event