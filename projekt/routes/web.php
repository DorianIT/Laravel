<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('people', [PeopleController::class,'searchPeople']);
Route::get('people-list', [PeopleController::class,'index']);
Route::get('add-people', [PeopleController::class,'addPeople']);
Route::post('save-people', [PeopleController::class,'savePeople']);
Route::get('edit-people/{id}', [PeopleController::class,'editPeople']);
Route::post('update-people', [PeopleController::class,'updatePeople']);
Route::get('delete-people/{id}', [PeopleController::class, 'deletePeople']);