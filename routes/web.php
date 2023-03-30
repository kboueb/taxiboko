<?php

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

Route::get('/', [App\Http\Controllers\ClientController::class, 'form_welcome']);
Route::get('/login', [App\Http\Controllers\ClientController::class, 'form_login']);
Route::get('/register', [App\Http\Controllers\ClientController::class, 'form_register']);
Route::get('/taxibokko', [App\Http\Controllers\ClientController::class, 'form_taxibokko']);
Route::get('/register-driver', [App\Http\Controllers\ChauffeurController::class, 'form_registerDriver']);
Route::get('/login-driver', [App\Http\Controllers\ChauffeurController::class, 'form_loginDriver']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'form_admin']);
Route::get('/management', [App\Http\Controllers\AdminController::class, 'form_management']);
Route::get('/gestion-client', [App\Http\Controllers\ClientController::class, 'form_gestionClient']);
Route::get('/gestion-chauffeur', [App\Http\Controllers\ChauffeurController::class, 'form_gestionChauffeur']);
Route::get('/update-user/{id}', [App\Http\Controllers\ClientController::class, 'form_update_user'])-> name('update_user');
Route::get('/accueil', [App\Http\Controllers\ClientController::class, 'form_accueil']);
Route::get('/gestion-trajet', [App\Http\Controllers\DestinationController::class, 'form_gestionTrajet']);

Route::post('/register/traitement', [App\Http\Controllers\ClientController::class, 'traitement_register']);
Route::post('/login/traitement', [App\Http\Controllers\ClientController::class, 'traitement_login']);
Route::post('/register-driver/traitement', [App\Http\Controllers\ChauffeurController::class, 'traitement_registerDriver']);
Route::post('/login-driver/traitement', [App\Http\Controllers\ChauffeurController::class, 'traitement_loginDriver']);
Route::post('/admin/traitement', [App\Http\Controllers\AdminController::class, 'traitement_admin']);
Route::delete('/delete-user/{id}', 'App\Http\Controllers\ClientController@destroy')->name('delete_user');
Route::delete('/delete-driver/{id}', 'App\Http\Controllers\ChauffeurController@destroy')->name('delete_driver');
Route::put('/edit-user/{id}', [App\Http\Controllers\ClientController::class, 'editUser'])->name('edit_user');
Route::post('/logout', 'App\Http\Controllers\AdminController@logout')->name('logout');
Route::post('/trajet/traitement', [App\Http\Controllers\DestinationController::class, 'traitement_trajet']);
Route::delete('/delete-destination/{id}', 'App\Http\Controllers\DestinationController@destroy')->name('delete_destination');
Route::post('/new-trajet/traitement', [App\Http\Controllers\TrajetController::class, 'traitement_new_trajet']);



?>
