<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ArtefactoController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\RfuncionalController;
use App\Http\Controllers\RNfuncionalController;
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

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('projects.projects');
    })->name('dashboard');

    Route::get('/projects', function () {
        return view('projects.projects  ');
    })->name('projects');

    Route::get('/actores', function(){
        return view('actores.actores');
    })->name('actores');
});

Route::controller(ActorController::class)->group(function(){
    Route::post('/actores/{project}','addAct')                    -> name('addAct');
    Route::get('projects/{project}/actores/{actor}', 'show')      -> name('actores.show');
    Route::get('projects/{project}/actores/{actor}/edit', 'edit') -> name('actores.edit');
    Route::put('projects/{project}/actores/{actor}', 'update')    -> name('actores.update');
    Route::delete('actores/{actor}', 'destroy')                   -> name('actores.destroy');
});

Route::controller(ProyectoController::class)->group(function(){
    Route::get('projects/{project}/actores', 'plantillaActor') -> name('actor');
    Route::get('projects/{project}/actoreslista', 'listarAct') -> name('listarAct');
    Route::post('/projects','addPro')                          -> name('addPro');
    Route::get('projects/lista','listarPro')                   -> name('listarPro');
    Route::get('projects/{project}', 'show')                   -> name('projects.show');
    Route::get('projects/{project}/edit', 'edit')              -> name('projects.edit');
    Route::put('projects/{project}', 'update')                 -> name('projects.update');
    Route::delete('projects/{project}', 'destroy')             -> name('projects.destroy');
});

Route::controller(ArtefactoController::class)->group(function(){
    Route::post('/artefactos/{project}','addArt')                           -> name('addArt');
    Route::get('projects/{project}/artefactos', 'plantillaArtefacto')       -> name('artefacto');
    Route::get('projects/{project}/artefactoslista', 'listarArt')           -> name('listarArt');
    Route::get('project/{project}/artefactos/{artefacto}', 'showArt')       -> name('showArt');
    Route::get('projects/{project}/artefactos/{artefacto}/edit', 'editArt') -> name('editArt');
    Route::put('projects/{project}/artefactos/{artefacto}', 'updateArt')    -> name('updateArt');
    Route::delete('artefactos/{artefacto}', 'destroyArt')                   -> name('destroyArt');
});

Route::controller(PlantillaController::class)->group(function(){
    Route::get('/project/{project}/artefactos/{artefacto}/plantilla', 'plantilla') -> name('addPlantilla');
    Route::post('/project/{project}/artefactos/{artefacto}/agregar', 'addAtributo') -> name('agregarAtributo');
});

Route::controller(RfuncionalController::class)->group(function(){
    Route::post('/RFuncionales/{project}','addRF')                         -> name('addRF');
    Route::get('projects/{project}/RFuncionales', 'plantillaRFuncionales') -> name('RFuncional');
    Route::get('projects/{project}/RFuncionaleslista', 'listarRF')         -> name('listarRF');
    Route::delete('RFuncionales/{RFuncional}', 'destroy')                  -> name('RFuncionales.destroy');

});
Route::controller(RNfuncionalController::class)->group(function(){
    Route::post('/RNFuncionales/{project}','addRNF')                         -> name('addRNF');
    Route::get('projects/{project}/RNFuncionales', 'plantillaRNFuncionales') -> name('RNFuncional');
    Route::get('projects/{project}/RNFuncionaleslista', 'listarRNF')         -> name('listarRNF');
    Route::delete('RNFuncionales/{RNFuncional}', 'destroy')                  -> name('RNFuncionales.destroy');

});