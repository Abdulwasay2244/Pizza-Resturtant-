<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restocontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// }); 


// Route::middleware(['CustomAuth'])->group(function () {

Route::get('/',[Restocontroller::class,'index']);

Route::middleware(['auth'])->group(function () {
        Route::get('/List', [Restocontroller::class, 'List']);
        Route::get('logout', [Restocontroller::class, 'logout']);
});

Route::view('add', 'add');
Route::post('/add', [Restocontroller::class, 'add']);

Route::get('/delete/{id}',[Restocontroller::class,'delete']);
Route::get('/edit/{id}',[Restocontroller::class,'edit']);
Route::post('edit',[Restocontroller::class,'update']);

Route::view('register','register')->name('register');
Route::post('register',[Restocontroller::class,'register']);

Route::view('login', 'login')->name('login');
Route::post('login',[Restocontroller::class,'login']);

Route::get('logout', [Restocontroller::class, 'logout']);
 

// });


