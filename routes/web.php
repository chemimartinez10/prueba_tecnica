<?php

use App\Livewire\Dashboard;
use App\Livewire\Emails;
use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\Logs;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Dashboard::class)->middleware('auth');
Route::get('/emails', Emails::class)->middleware('auth');
Route::get('/users', Users::class)->middleware('auth')->middleware('role:admin');
Route::get('/logs', Logs::class)->middleware('auth')->middleware('role:admin');
Route::get('/login', Login::class)->name('login');
Route::get('/logout', Logout::class)->name('logout')->middleware('auth');
