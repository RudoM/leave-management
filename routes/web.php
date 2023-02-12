<?php

use App\Http\Livewire\Apply;
use App\Http\Livewire\Requests;
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
    // return view('welcome');
    return redirect('/apply');
});

Route::get('/apply', Apply::class);
Route::get('/requests', Requests::class);