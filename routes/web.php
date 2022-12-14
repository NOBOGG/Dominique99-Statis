<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Models\Menu;

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

Route::get('/', [MenuController::class,'index']);

Route::get('/menu', [MenuController::class,'indexMenu']);

Route::get('/detail/{id}', [MenuController::class,'indexDetail']);

Route::get('/contact', function(){
    return view('contact');
});

// Route::view('/contact', 'contact');

// Route::get('/', function () {
//     return view('welcome');
// });
