<?php

use App\Http\Controllers\budgetcontroller;
use Illuminate\Support\Facades\Route;


//home page
Route::get('/', [budgetcontroller::class, 'home']);
//budget page
Route::post('/', [budgetcontroller::class, 'home_store']);
Route::get('/budgets', [budgetcontroller::class, 'budget']);
//create budget
Route::get('/create', [budgetcontroller::class, 'create_budget'])->middleware('auth');;
//store budget
Route::post('/budgets', [budgetcontroller::class, 'store_budget']);
//show budget
Route::get('/show', [budgetcontroller::class, 'show_budget'])->middleware('auth');
//edit page
Route::get('/edit', [budgetcontroller::class, 'edit_budget'])->middleware('auth');
//update
Route::patch('/edit', [budgetcontroller::class, 'update_budget'])->middleware('auth');
//track page
Route::get('/track', [budgetcontroller::class, 'track'])->middleware('auth');
//catagory page
Route::get('/catagory', [budgetcontroller::class, 'catagory'])->middleware('auth');
//about page
Route::get('/about', [budgetcontroller::class, 'about']);
//signup page
Route::get('/signup', [budgetcontroller::class, 'signup']);
//login
Route::get('/loginuser', [budgetcontroller::class, 'login'])->name('login');
//logout
Route::post('/logout', [budgetcontroller::class, 'logout']);
//store registration
Route::post('/signup', [budgetcontroller::class, 'store_signup']);
//store login
Route::post('/loginuser', [budgetcontroller::class, 'store_login']);
//store total expense
Route::post('/catagory',  [budgetcontroller::class, 'store_expense']);
//store track
Route::post('/track', [budgetcontroller::class, 'store_track']);
Route::get('/dashboard', function () {
    return view('dashboard');
});
