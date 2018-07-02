<?php

use App\User;
use Illuminate\Foundation\Http\Middleware\Authorize;


Route::get('login-as/{id}', function ($id) {
    auth()->loginUsingId($id);
    return Redirect::to('/');
});

Route::resource('users', 'UsersController', ['parameters' => [
    'users' => 'user'
]]);
Route::get('users/delete/{id}', ['as' =>  'users/delete', 'uses' => 'UsersController@destroy']);
Route::get('users/restore/{id}', ['as' =>  'users/restore', 'uses' => 'UsersController@restore']);

Route::get('usersxls',['as' => 'usersxls', 'uses'=> 'UsersController@aexcel']);
Route::get('usernew',['as' => 'usernew', 'uses'=> 'UsersController@newuser']);

Route::group(['middleware' =>'auth'], function(){
    route::get('profile', 'ProfileController@edit');
    route::put('profile', 'ProfileController@update');
    route::get('profile/avatar', 'ProfileController@avatar');
    route::get('profile/{user}', 'ProfileController@show');
 });

Route::get('passchange',[ 'uses' => 'ProfileController@getPassword','as' => 'passchange']);
Route::post('postpasschange',['uses' => 'ProfileController@postPassword','as' => 'postpasschange']);
