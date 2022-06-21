<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReservationController;
use Database\Factories\CategoriesFactory;
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

// Route::get('/inserte-reservation', function () {  
//     return view('pages.inserte-reservation');
//     });
// Route::get('/edit-reservation', function () {  
//     return view('pages.edit-reservation');
//     });
// Route::get('/inserte-categorie', function () {  
//     return view('pages.inserte-categorie');
//     });
// Route::get('/edit-categorie', function () {  
//     return view('pages.edit-categorie');
//     });
// Route::get('/tableau-reservation', function () {  
//     return view('pages.tableau-reservation');
//     });
// Route::get('/tableau-categorie', function () {  
//     return view('pages.tableau-categorie');
//     });


// route::get('/afficher',[CategorieController::class,'index']);
Route::get('/', function () {
    return view('pages.login');
    });


route::post('/',[adminController::class,'login']);


Route::resource('afficher-categorie', CategorieController::class);
Route::resource('afficher-reservation', ReservationController::class);

