<?php

Use \App\User;
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

Route::fallback(function(){
    return response()->view('errors.notFound', [], 404);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('refresh_captcha', 'ConfigController@refreshCaptcha')->name('refresh_captcha');

Route::post('send', ['as' => 'send', 'uses' => 'ConfigController@send'] );

Route::resource('/task', 'TaskController');
Route::get('/tareas', 'ConfigController@tareas')->name('tareas');

Route::get('autocomplete/users',function(){
    $term = Request::get('term');
    return User::findByNameOrEmail($term);
});

Route::get('/files', 'FileController@index')->name('files.index');
Route::post('/files', 'FileController@store')->name('files.store');
Route::delete('/files/{file}', 'FileController@destroy')->name('files.destroy');
Route::get('/files/{file}/download', 'FileController@download')->name('files.download');



Route::group([ 'namespace' => 'nav'], function () {
    require __DIR__ . '/routes/navbar.routes.php';
});

Route::group([ 'namespace' => 'Admin'], function () {
    require __DIR__ . '/routes/admin.routes.php';
});

Route::group([ 'namespace' => 'Tablas'], function () {
    require __DIR__ . '/routes/tablas.routes.php';
});
Route::group([ 'namespace' => 'Empresas'], function () {
    require __DIR__ . '/routes/empresas.routes.php';
});
