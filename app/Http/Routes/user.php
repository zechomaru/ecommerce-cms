<?php
Route::auth();
// Route::get('login', [
//     'uses' => 'Auth\AuthController@index',
//     'as' => 'user.auth.login',
// ]);

// Route::post('login', [
//     'uses' => 'Auth\AuthController@login',
//     'as' => 'user.auth.login',
// ]);

// Route::get('logout', [
//     'uses' => 'Auth\AuthController@logout',
//     'as' => 'user.auth.logout',
// ]);

// Route::get('register', [
//     'uses' => 'Auth\AuthController@getRegister',
//     'as' => 'user.auth.register',
// ]);

// Route::post('register', [
//     'uses' => 'Auth\AuthController@postRegister',
//     'as' => 'user.auth.register',
// ]);

// Route::get('password/reset/{token?}', [
//     'uses' => 'PasswordController@showResetForm',
//     'as' => 'user.password.reset',
// ]);

// Route::post('password/reset', [
//     'uses' => 'PasswordController@reset',
//     'as' => 'user.password.reset',
// ]);

// Route::post('password/email', [
//     'uses' => 'PasswordController@sendResetLinkEmail',
//     'as' => 'user.password.email',
// ]);