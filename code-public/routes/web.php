<?php
use App\Http\Controllers\reservationControllers;
use App\Http\Controllers\formulaireController;
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
route::get('/reservation-forme/{id}',[reservationControllers::class,'afficher_reservation_id']);

// Route::get('/success', function () {
//     return view('pages.success');
// });

Route::resource('tableau-reservation',formulaireController::class);