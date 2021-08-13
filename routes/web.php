<?php


Route::get('/', 'PagesController@inicio');

Route::get('seleccion', 'PagesController@seleccion')->middleware('auth');

Route::get('listado', 'PagesController@listado')->name('listado')->middleware('auth');

Route::get('fichaApadrinado/{id?}', 'PagesController@fichaApadrinado')->name('fichaApadrinado')->middleware('auth');

Route::post('proyeto-A/create/descripcion{id?}', 'ProyectoaapadrinadoController@descripcion')->name('proyecto-A.descripcion')->middleware('auth');

Route::resource('proyecto-A', 'ProyectoaapadrinadoController')->middleware('auth');

Route::resource('integrantes-A', 'IntegranteController')->middleware('auth');

Route::resource('familias', 'FamiliaController')->middleware('auth');

Route::resource('vivienda-A', 'ViviendaController')->middleware('auth');

Route::resource('estudios-A', 'EstudiosController')->middleware('auth');

Route::resource('tutor-A', 'TutorController')->middleware('auth');

Route::resource('informacionpago-A', 'InformacionpagoController')->middleware('auth');

Route::resource('cartarespuesta', 'CartarespuestaController')->middleware('auth');

Route::get('cartaotro-A/{cartaotro_A}/edit/{año}', 'CartaotroController@años')->middleware('auth');

Route::resource('cartaotro-A', 'CartaotroController')->middleware('auth');

Route::resource('observaciones-A', 'ObservacionController')->middleware('auth');

Route::get('busqueda', 'PagesController@busqueda')->name('busqueda')->middleware('auth');

Route::get('registroCambios', 'PagesController@registroCambios')->name('registroCambios')->middleware('auth');

Route::get('egresados', 'PagesController@egresados')->name('egresados')->middleware('auth');

Route::get('ayuda', 'PagesController@ayuda')->name('ayuda')->middleware('auth');

Route::get('contacto', 'PagesController@contacto')->name('contacto')->middleware('auth');

Route::get('login', 'Auth\LoginController@showLoginForm');

Route::post('login', 'Auth\LoginController@login');

Auth::routes();



//Route::get('/home', 'HomeController@index')->name('home');
