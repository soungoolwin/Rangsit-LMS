<?php

use App\Livewire\Counter;
use App\Livewire\Courses;
use App\Livewire\Dashboard;
use App\Livewire\SiteHome;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.single-login');
});

Route::get('/home', SiteHome::class);
Route::get('/dashboard', Dashboard::class);



Route::get('/dashboard/courses/{categories}/{subcategories}', Courses::class);
