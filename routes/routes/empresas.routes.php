<?php

//empresacreate
Route::get('creatempresa',['as' => 'empresas', 'uses' => 'EmpresaController@create','as' => 'creatempresa']);
Route::post('storempresa',['uses' => 'EmpresaController@storempresa','as' => 'storempresa']);
Route::get('listempresa',['uses' => 'EmpresaController@index','as' => 'listempresa']);
Route::get('/empresa/edit/{id}','EmpresaController@edit')->name('empresaedit');
Route::put('empresa/update/{id}', ['as' =>  'empresa/update', 'uses' => 'EmpresaController@update']);
Route::get('empresa/delete/{id}', ['as' =>  'empresa/delete', 'uses' => 'EmpresaController@destroy']);
Route::get('empresa/restore/{id}', ['as' =>  'empresa/restore', 'uses' => 'EmpresaController@restore']);
Route::get('empresa/show/{id}','EmpresaController@show')->name('empresashow');

Route::get('empresa/shownotas/{id}','EmpresaController@shownotas')->name('empresashownotas');
Route::put('empresa/updatenota/{id}',['as' =>  'empresa/updatenota', 'uses' => 'EmpresaController@updatenota']);
//Route::get('/empresaQuery','EmpresaController@empresaQuery')->name('empresaQuery');
Route::get('/empresa/excel','EmpresaController@aexcel')->name('empresaexcel');
Route::get('pdfview/{id}/{pd}',['as' => 'pdfview','uses'=>'EmpresaController@pdf',]);

//socios
Route::get('listasocios', ['uses' => 'SocioController@index','as' => 'listasocios']);
Route::get('socioscreate',['uses' => 'SocioController@create','as' =>'socioscreate']);
Route::post('storesocios',['uses' => 'SocioController@store','as' =>'storesocios']);
Route::get('/socio/edit/{id}','SocioController@edit')->name('socioedit');
Route::put('socio/update/{id}', ['as' =>  'socio/update', 'uses' => 'SocioController@update']);
Route::get('socio/delete/{id}', ['as' => 'socio/delete', 'uses' => 'SocioController@destroy']);
Route::get('socio/restore/{id}', ['as' => 'socio/restore', 'uses' => 'SocioController@restore']);
Route::get('socio/shownotas/{id}','SocioController@shownotas')->name('socioshownotas');
Route::put('socio/updatenota/{id}',['as' =>  'socio/updatenota', 'uses' => 'SocioController@updatenota']);
Route::get('/socio/excel','SocioController@aexcel')->name('socioexcel');



//contactos
Route::get('/contactos', function () {
    return view('empresas.contactos.contactos');});
Route::get('/contactosQuery','ContactoController@contactosQuery')->name('contactosQuery');
Route::post('/contactoscreate','ContactoController@create')->name('contactoscreate');
Route::delete('/contactosdelete/{id}','ContactoController@destroy')->name('contactosdelete');
Route::put('/contactosupdate/{id}','ContactoController@update')->name('contactosupdate');
Route::put('/contactosnotas/{id}','ContactoController@notasupdate')->name('contactosnotas');
