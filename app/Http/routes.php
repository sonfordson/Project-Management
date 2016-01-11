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
Route::resource('/milestone' ,'milestoneController');

/**
 * routes for team
 */
Route::resource('/team' ,'teamController');


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
