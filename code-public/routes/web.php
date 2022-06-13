<?php
use App\Http\Controllers\reservationControllers;
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

Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/reservation-forme', function () {
    return view('pages.reservation-forme');
});
Route::get('/reservation', function () {
    return view('pages.reservation');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

route::get('/reservation',[reservationControllers::class,'afficher_categories']);
// route::get('/categorie/{id}',[placesController::class,'afficher_categories']);
