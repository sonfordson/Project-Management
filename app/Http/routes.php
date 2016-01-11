<?php

Route::get('/', function () {
    return view('index');
});

/**
 * routes for project
 */
Route::resource('/project', 'projectsController');

/**
 * routes for milestone
 */
Route::get('/milestone/index' ,['as'=>'milestone.index', 'uses'=>'milestoneController@index']);
Route::post('/milestone/store' ,['as'=>'milestone.store', 'uses'=>'milestoneController@store']);
/**
 * routes for team
 */
Route::get('/team/index' ,['as'=>'team.index', 'uses'=>'teamController@index']);
Route::post('/team/store' ,['as'=>'team.store', 'uses'=>'teamController@store']);

/**
 * user management
 */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);
