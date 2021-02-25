<?php

use App\Http\Controllers\BookController;
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

// Créer un projet laravel_validation_exo_1
// Créer un systeme crud pour un livre d'or avec 3 champs
// - Le nom de l'auteur
// - Le texte de l'auteur
// - la note de l'auteur ( entre 1 et 5 )

// Avec les validations vérifiez
// - le nom soit bien écrit et comporte maximum 20caractères
// - le texte maximum 300 caractère, requis
// - la note ne peut pas excéder le nombre 5 et être plus petit que 1 et est requis

// Affichez le total des notes de tous les auteurs en haut de l'écran


Route::get('/', [BookController::class, 'index']);
Route::get('/create', [BookController::class, 'create']);
Route::get('/show-book/{id}', [BookController::class, 'show']);
Route::get('/edit-book/{id}', [BookController::class, 'edit']);

Route::post('/store-book', [BookController::class, 'store']);
Route::post('/update-book/{id}', [BookController::class, 'update']);
Route::post('/destroy-book/{id}', [BookController::class, 'destroy']);