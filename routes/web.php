<?php

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

use App\Models\Materiel;
use App\Models\User;
use App\Models\Service;
use App\Models\Bureau;
use App\Models\Logiciel;

Route::get('/', function () {
    return view('welcome');
});

/**
  *Routes pour la visualisation des données de la base
**/
Route::get('/unites', function () {
    $materiels = Materiel::where('type','Unite centrale')->get();
    return view('unites_centrales')->withMateriels($materiels);
});

Route::get('/printers', function () {
    $materiels = Materiel::where('type','Imprimante')->get();
    return view('printers')->withMateriels($materiels);
});

Route::get('/ecrans', function () {
    $materiels = Materiel::where('type','Ecran')->get();
    return view('ecrans')->withMateriels($materiels);
});

Route::get('/all', function () {
    $materiels = Materiel::all();
    return view('all')->withMateriels($materiels);
})->name('all');

Route::get('/users', function () {
    $materiels = User::all();
    return view('users')->withMateriels($materiels);
})->name('users');

Route::get('/services', function () {
    $materiels = Service::all();
    return view('services')->withMateriels($materiels);
});

Route::get('/bureaux', function () {
    $materiels = Bureau::all();
    return view('bureaux')->withMateriels($materiels);
})->name('bureaux');

Route::get('/softwares', function () {
    $materiels = Logiciel::all();
    return view('softwares')->withMateriels($materiels);
})->name('softwares');

Route::get('/pc_complet', function () {
    $materiels = Materiel::where('type',['Unite Centrale','Ecran'])->get();
    return view('computers')->withMateriels($materiels);
});

/**
  *Routes pour l'ajout de données dans la base
**/
Route::get('/add', function () {
    $materiels = Materiel::all();
    return view('addmaterial')->withMateriels($materiels);
});

Route::get('/add_user', function () {
    $materiels = User::all();
    return view('adduser')->withMateriels($materiels);
});

Route::get('/add_soft', function () {
    $materiels = Logiciel::all();
    return view('addlogiciel')->withMateriels($materiels);
});

Route::get('/add_bureau', function () {
    $materiels = Bureau::all();
    return view('addbureau')->withMateriels($materiels);
});

/**
  *Route pour ajout dans la base depuis le formulaire
**/

Route::post('/add',['as' => 'form_url','uses' => 'MaterielController@save_data']);

Route::post('/adduser',['as' => 'form_url','uses' => 'UserController@save_data']);

Route::post('/addsoft',['as' => 'form_url','uses' => 'LogicielController@save_data']);

Route::post('/addbureau',['as' => 'form_url','uses' => 'BureauController@save_data']);

/**
  *Routes pour la suppression d'un enregistrement en base
**/

Route::post('/delete',['as' => 'form_url','uses' => 'MaterielController@delete_data']);
