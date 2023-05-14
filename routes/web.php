<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PaymentController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign_up');
});





//All payments
Route::get('/', [PaymentController::class, 'index'])->name('login');


// Store Payment data
Route::post('/payments', [PaymentController::class, 'store'])->middleware('auth');
Route::get('/payments')->middleware('auth');
// Show edit form
Route::get('/payments/{payment}/edit', [PaymentController::class, 'edit'])->middleware('auth');

// Edit Submit to Update
Route::put('/payments/{payment}', [PaymentController::class, 'update'])->middleware('auth');

Route::delete('/payments/{payment}', [PaymentController::class, 'destroy'])->middleware('auth');

//Payment detail
Route::get('/payments/{payment}', [PaymentController::class, 'show'])->middleware('auth');




// Show Register/Create Form
Route::post('/users', [UserController::class, 'store'])->middleware('guest');
Route::get('/users')->middleware('guest');

Route::post('/users/login', [UserController::class, 'login'])->middleware('guest');
Route::get('/users/login')->middleware('guest');

//Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
ROute::get('/logout')->middleware('auth');



//Group form
Route::post('/groups/store', [GroupController::class, 'store']);
