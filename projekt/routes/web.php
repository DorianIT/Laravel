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
Route::get('Majer/50439/people/{id}', [PeopleController::class,'people']);
Route::get('Majer/50439/people-list', [PeopleController::class,'index']);
Route::get('Majer/50439/add-people', [PeopleController::class,'addPeople']);
Route::post('Majer/50439/save-people', [PeopleController::class,'savePeople']);
Route::get('Majer/50439/edit-people/{id}', [PeopleController::class,'editPeople']);
Route::post('Majer/50439/update-people', [PeopleController::class,'updatePeople']);
Route::get('Majer/50439/delete-people/{id}', [PeopleController::class, 'deletePeople']);
Route::put('Majer/50439/change-people/{id}', [PeopleController::class, 'changePeople']);
