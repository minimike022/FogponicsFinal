<?php

use App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Navigation;
use App\Http\Controllers\UserAccounts;

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
    return view('Pages.login');
});

Route::post('/authenticate', [Authentication::class, 'Authenticate']);
Route::post('/user/createAccount', [UserAccounts::class, "createAccount"]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [Navigation::class, "dashboard"])->name('dashboard');
    Route::get('/sensors', [Navigation::class, "sensors"])->name('sensors');
    Route::get('/controller', [Navigation::class, "controller"])->name('controller');
    Route::get('/account/changePass', [Navigation::class, "changepassword"])->name('changePass'); 
    
});
Route::middleware('auth')->group(function () {
    Route::post('/user/updatePassword', [UserAccounts::class, "updatePassword"]);
    Route::post('/user/logout', [Navigation::class, "logout"])->name('logout');
});

Route::middleware('isAdmin')->group(function() {
    Route::get('/users', [UserAccounts::class, "fetchAccounts"])->name('users'); 
});