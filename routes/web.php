<?php

use App\Http\Controllers\usercontroller;
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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('addusers');
});

Route::get('/users', [usercontroller::class, 'showusers']);
Route::post('/add', [usercontroller::class, 'adduser']);
Route::get('deleteuser/{id}', [usercontroller::class, 'deleteuser']);
Route::get('deletepassport/{id}', [usercontroller::class, 'deletepassport']);
Route::get('edituser/{id}', [usercontroller::class, 'edituser']);
Route::post('updateuser/{id}', [usercontroller::class, 'updateuser']);
Route::get('editpass/{id}', [usercontroller::class, 'editpass']);
Route::post('updatepass/{id}', [usercontroller::class, 'updatepass']);
