<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController; // Assurez-vous d'importer correctement le contrôleur
use App\Http\Controllers\DocteurController; // Assurez-vous d'importer correctement le contrôleur
use App\Http\Controllers\RdvController; // Assurez-vous d'importer correctement le contrôleur

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
    return view('welcome');
});


Route::get('/accueil',[UserController::class, 'accueil'] )->name('accueil');

// PATIENT

// inscription patient
Route::post('/inscriptionP',[UserController::class, 'inscription'] );

Route::get('/inscriptionP',[UserController::class, 'inscrip'] )->name('inscrippatient');

// connexion patient
Route::post('/connexionP',[UserController::class, 'connexion'] );

Route::get('/connexionP',[UserController::class, 'connex'] )->name('connexpatient');

Route::get('/patientconnect',[UserController::class, 'patientconnect'] )->name('patientconnect');

Route::get('/apropos',[UserController::class, 'apropos'] )->name('apropos');

Route::get('/services',[UserController::class, 'services'] )->name('services');

Route::post('/prendrerendezvous',[RdvController::class, 'prendrerdv'] );

Route::get('/prendrerendezvous',[RdvController::class, 'prendrerendezvous'] )->name('prendrerendezvous');

Route::get('/rdvsoumis',[RdvController::class, 'rdvsoumis'] )->name('rdvsoumis');


Route::get('/rendezvousvalider/{id}/validated', [RdvController::class, 'validateRdv'])->name('rendez-vous.validated');

Route::get('/get-doctors', [DocteurController::class, 'getDoctors']);

Route::get('/listedocteur',[UserController::class, 'listedocteur'] )->name('listedocteur');

Route::get('/troisdocteur',[UserController::class, 'troisdocteur'] )->name('troisdocteur');





// DOCTEUR

// inscription docteur
Route::post('/inscriptionD',[DocteurController::class, 'inscription'] );

Route::get('/inscriptionD',[DocteurController::class, 'inscrip'] )->name('inscripdocteur');

// connexion docteur
Route::post('/connexionD',[DocteurController::class, 'connexion'] );

Route::get('/connexionD',[DocteurController::class, 'connex'] )->name('connexdocteur');

Route::get('/docteurconnect',[DocteurController::class, 'docteurconnect'] )->name('docteurconnect');





Route::get('/bonjour',[UserController::class, 'bonjour'] )->name('bonjour');

Route::get('/bienvenu',[UserController::class, 'bienvenu'] )->name('bienvenu');

Route::get('/logout',[UserController::class, 'logout'] )->name('logout');
