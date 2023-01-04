<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BilletController;
use App\Http\Controllers\CommentaireController;
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

//Routes pour la gestion des billets
Route::resource('billets',BilletController::class);

//Routes pour la gestion des commentaires
Route::resource('commentaires',CommentaireController::class);

//Routes pour passer l'id du billet de la vue index au controleur CommenatireController
Route::get('commenter/{id}',[CommentaireController::class,'create'])->name('commenter');