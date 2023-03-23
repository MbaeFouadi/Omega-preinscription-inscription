<?php

use App\Http\Controllers\candidatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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
    return view('auth_login');
})->name('/');

Route::get('/dossier', function () {
    return view('dossier');
})->name('dossier');



Route::get('accueil', [candidatController::class, 'accueil'])->middleware(['auth', 'verified'])->name("accueil");

Route::post('candidats', [candidatController::class, 'updates'])->middleware(['auth', 'verified'])->name("candidats");
Route::post('accueil', [candidatController::class, 'candidat_info'])->middleware(['auth', 'verified'])->name("accueil");
Route::post('accueil/getDepartement', [candidatController::class, 'getDepartement'])->middleware(['auth', 'verified'])->name("getDepartement");
Route::post('accueil/getDepartement1', [candidatController::class, 'getDepartement1'])->middleware(['auth', 'verified'])->name("getDepartement1");
Route::post('accueil/getDepartement2', [candidatController::class, 'getDepartement2'])->middleware(['auth', 'verified'])->name("getDepartement2");
Route::post('accueil/getDepartement3', [candidatController::class, 'getDepartement3'])->middleware(['auth', 'verified'])->name("getDepartement3");
Route::post('accueil/add_fili', [candidatController::class, 'add_fili'])->middleware(['auth', 'verified'])->name("add_fili");
Route::post('accueil/add_doc', [candidatController::class, 'add_doc'])->middleware(['auth', 'verified'])->name("add_doc");




Route::get('filiere', [candidatController::class, 'candidat_filiere'])->middleware(['auth', 'verified'])->name("filiere");
Route::get('info_fili', [candidatController::class, 'info_fili'])->middleware(['auth', 'verified'])->name("info_fili");
Route::get('showDoc', [candidatController::class, 'showDoc'])->middleware(['auth', 'verified'])->name("showDoc");
Route::get('getInfo', [candidatController::class, 'getInfo'])->middleware(['auth', 'verified'])->name("getInfo");

Route::get('Modification_info', [candidatController::class, 'Modification_info'])->middleware(['auth', 'verified'])->name("Modification_info");
Route::get('Modification_fili', [candidatController::class, 'Modification_fili'])->middleware(['auth', 'verified'])->name("Modification_fili");
Route::get('Modification_doc', [candidatController::class, 'Modification_doc'])->middleware(['auth', 'verified'])->name("Modification_doc");

Route::post("/update_info",[candidatController::class,'update_info'])->middleware(['auth', 'verified'])->name("update_info");
Route::post("update_info/getPreins1",[candidatController::class,'getPreins1'])->middleware(['auth', 'verified'])->name("getPreins1");
Route::post("update_info/getPreins2",[candidatController::class,'getPreins2'])->middleware(['auth', 'verified'])->name("getPreins2");


Route::post("/update_fili",[candidatController::class,'update_fili'])->middleware(['auth', 'verified'])->name("update_fili");
Route::post("/update_doc",[candidatController::class,'update_doc'])->middleware(['auth', 'verified'])->name("update_doc");




Route::resource('candidat', candidatController::class)->middleware(['auth', 'verified']);

Route::get('mon_bac', [candidatController::class, 'mon_bac'])->middleware(['auth', 'verified'])->name("mon_bac");

Route::post("/type",[candidatController::class,'type'])->middleware(['auth', 'verified'])->name("type");


Route::get('inscription', function () {
    return view('auth_register');
})->name("inscription");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

require __DIR__ . '/inscription.php';
