<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\RessourceController;
use App\Http\Controllers\TypeProjetController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\PorteurProjetController;

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

Route::get('/',[ProjetController::class,'home'])->name('/');


Route::resource('projet',ProjetController::class);
Route::resource('fournisseur',FournisseurController::class);
Route::resource('personnel',PersonnelController::class);
Route::resource('porteurProjet',PorteurProjetController::class);
Route::resource('ressource',RessourceController::class);
Route::resource('typeProjet',TypeProjetController::class);




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
