<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EntrepriseProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', ProjectController::class);
/*Route::get('index_projects', "App\Http\Controllers\ProjectController@index")->name("projects.index");
Route::post('store_projects', "App\Http\Controllers\ProjectController@store")->name("projects.store");
Route::get('create_projects/create', "App\Http\Controllers\ProjectController@create")->name("projects.create");
Route::get('show_projects/{idprojet}', "App\Http\Controllers\ProjectController@show")->name("projects.show");
Route::put('update_projects/{idprojet}', "App\Http\Controllers\ProjectController@update")->name("projects.update");
Route::delete('destroy_projects/{idprojet}', "App\Http\Controllers\ProjectController@destroy")->name("projects.destroy");
Route::get('edit_projects/{idprojet}/edit', "App\Http\Controllers\ProjectController@edit")->name("projects.edit");*/

Route::resource('entreprises', EntrepriseController::class);
/*Route::get('index_entreprises', "App\Http\Controllers\EntrepriseController@index")->name("entreprises.index");
Route::post('store_entreprises', "App\Http\Controllers\EntrepriseController@store")->name("entreprises.store");
Route::get('create_entreprises/create', "App\Http\Controllers\EntrepriseController@create")->name("entreprises.create");
Route::get('show_entreprises/{identreprise}', "App\Http\Controllers\EntrepriseController@show")->name("entreprises.show");
Route::put('update_entreprises/{identreprise}', "App\Http\Controllers\EntrepriseController@update")->name("entreprises.update");
Route::delete('destroy_entreprises/{identreprise}', "App\Http\Controllers\EntrepriseController@destroy")->name("entreprises.destroy");
Route::get('edit_entreprises/{identreprise}/edit', "App\Http\Controllers\EntrepriseController@edit")->name("entreprises.edit");*/


Route::resource('chooses', EntrepriseProjectController::class);
//Route::get('create_chooses/create', "App\Http\Controllers\EntrepriseProjectController@create")->name("chooses.create");
//Route::get('index_chooses/{id}/index', "App\Http\Controllers\EntrepriseProjectController@index")->name("chooses.index");
