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

Route::group(['middleware'=>'admin'], function ()
{
  	Route::get('/admin', 'AdminController@index');

  	Route::get('/admin/login', 'AdminController@login');
    Route::post('/admin/login', 'AdminController@postLogin');
   
    Route::get('/admin/logout', 'AdminController@logout');
});

//Route::get('/painel/produtos/tests', 'Painel\ProdutoController@tests');
//Route::resource('/painel/produtos', 'Painel\ProdutoController');





Auth::routes();

//Route::get('/home', 'HomeController@index');
//Route::get('/', 'Site\SiteController@index');
Route::get('/', 'painel\ChartController@index');

Route::get('/roles-permissions', 'HomeController@rolesPermissions');

Route::resource('/gabinete', 'painel\PainelController');
//Relatorios de Campanha
$this->any('/relatorios/individuais', 'painel\RelatoriosController@search')->name('relatorios.individuais');

Route::resource('/relatorios/aniversario', 'painel\RelatoriosController@aniversario');
Route::resource('/relatorios', 'painel\RelatoriosController');


//Calendário

Route::resource('/events', 'painel\EventsController');
Route::get('/getEventos', 'painel\EventsController@getEventos');
//Relatorios de Eleição
$this->any('/relat-ind-colaboradores', 'painel\RelatoriosColaboradoresController@store')->name('relatorios.individuais.colaboradores');Route::resource('/relatorios-colaboradores', 'painel\RelatoriosColaboradoresController');



Route::resource('/charts', 'painel\ChartController');
Route::resource('/mapas', 'painel\MapaController');

//ProdutoController(Cadastro da campanha)
Route::resource('/dashboard', 'painel\ProdutoController');
Route::resource('/dashboard/{id}/profile', 'painel\ProdutoController@profile');

//CadastroController(Cadastro de trabalhadores)
Route::resource('/colaboradores', 'painel\CadastroController');
Route::resource('/colaboradores/{id}/profile', 'painel\CadastroController@profile');
//PermissionsController
Route::resource('/permissions', 'painel\PermissionsController');
Route::resource('/permission/{id}/roles', 'painel\PermissionsController@roles');

//RolesController
Route::resource('/roles', 'painel\RolesController');
Route::resource('/role/{id}/permissions', 'painel\RolesController@permissions');
//UsersController
Route::resource('/usuarios', 'painel\UserController');
Route::resource('/user/{id}/roles', 'painel\UserController@roles');


 Route::get('aniversario', function () {
        return view('aniversario');
    });

