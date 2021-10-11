<?php

use App\Http\Livewire;
use App\Models\Comment;
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

/* Route::get('/', function () {
    //$comments = Comment::all();
    //return view('welcome', compact('comments'));
    return view('welcome');
}); */

Route::get('/' , App\Http\Livewire\Home::class);
Route::get('/login' , App\Http\Livewire\Login::class);
