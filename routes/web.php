<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;


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
Route::prefix('User')->name('Users.')->group(function () {
    route::get('Index', [UserController::class, 'Index']);
    route::get('Show', [UserController::class, 'Show']);
    route::get('Add', [UserController::class, 'Add']);
    route::get('Edit', [UserController::class, 'Edit']);
    route::get('Update', [UserController::class, 'Update']);
});

route::get('target', [SalesController::class, 'target']);

