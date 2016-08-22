<?php
/*************************----Dashboard---************************************/
Route::group(['middleware' => ['auth:admin']], function ($router) {
    // ruta/admin/dashboard
    Route::get('/', function ()
    {
        return redirect('/admin/dashboard');
    });
    Route::get('/dashboard', [
        'uses' => 'DashboardController@index',
        'as' => 'admin.index',
    ]);

    Route::get('/configuracion', [
        'uses' => 'SettingController@edit',
        'as' => 'admin.settings',
    ]);



    Route::put('/configuracion/update', 'SettingController@update');

        Route::get('/google', [
            'uses' => 'GoogleController@edit',
            'as' => 'admin.google',
        ]);
        Route::put('/google/update', 'GoogleController@update');

        // crud categorias

        Route::get('/categorias', 'CategoriesController@index');
        Route::get('/categoria/new', 'CategoriesController@create');
        Route::post('/categoria/new', 'CategoriesController@store');
        Route::get('/categoria/{id}', 'CategoriesController@show');
        Route::get('/categoria/edit/{id}', 'CategoriesController@edit');
        Route::put('/categoria/update/{id}', 'CategoriesController@update');


        Route::get('/menus', 'NavsController@index');
        Route::get('/menus/new', 'NavsController@create');
        Route::post('/menus/new', 'NavsController@store');
        Route::get('/menus/{id}', 'NavsController@show');
        Route::get('/menus/edit/{id}', 'NavsController@edit');
        Route::put('/menus/update/{id}', 'NavsController@update');


        // crud administradores

        Route::get('/admins', 'AdminsController@index');
        Route::get('/admin/new', 'AdminsController@create');
        Route::post('/admin/new', 'AdminsController@store');
        Route::get('/admin/{id}', 'AdminsController@show');
        Route::get('/admin/edit/{id}', 'AdminsController@edit');
        Route::put('/admin/update/{id}', 'AdminsController@update');



        // crud grupos

        Route::get('/grupos', 'GroupsController@index');
        Route::get('/grupo/new', 'GroupsController@create');
        Route::post('/grupo/new', 'GroupsController@store');
        Route::get('/grupo/{id}', 'GroupsController@show');
        Route::get('/grupo/edit/{id}', 'GroupsController@edit');
        Route::put('/grupo/update/{id}', 'GroupsController@update');

        // crud sub-grupos

        Route::get('/sub-grupos', 'SubGroupsController@index');
        Route::get('/sub-grupo/new', 'SubGroupsController@create');
        Route::post('/sub-grupo/new', 'SubGroupsController@store');
        Route::get('/sub-grupo/{id}', 'SubGroupsController@show');
        Route::get('/sub-grupo/edit/{id}', 'SubGroupsController@edit');
        Route::put('/sub-grupo/update/{id}', 'SubGroupsController@update');

        // crud marcas

        Route::get('/marcas', 'BrandsController@index');
        Route::get('/marca/new', 'BrandsController@create');
        Route::post('/marca/new', 'BrandsController@store');
        Route::get('/marca/{id}', 'BrandsController@show');
        Route::get('/marca/edit/{id}', 'BrandsController@edit');
        Route::put('/marca/update/{id}', 'BrandsController@update');


        // crud productos

        Route::get('/productos', 'ProductsController@index');
        Route::get('/producto/new', 'ProductsController@create');
        Route::post('/producto/new', 'ProductsController@store');
        Route::get('/producto/{id}', 'ProductsController@show');
        Route::get('/producto/edit/{id}', 'ProductsController@edit');
        Route::put('/producto/update/{id}', 'ProductsController@update');

        //newsletter
        Route::get('/newsletters', 'NewsletterController@index');





});

Route::get('login', [
    'uses' => 'Auth\AuthController@index',
    'as' => 'admin.auth.login',
]);

Route::post('login', [
    'uses' => 'Auth\AuthController@login',
    'as' => 'admin.auth.login',
]);

Route::get('logout', [
    'uses' => 'Auth\AuthController@logout',
    'as' => 'admin.auth.logout',
]);
// test uppercase
// Route::get('register', [
//     'uses' => 'Auth\AuthController@getRegister',
//     'as' => 'admin.auth.register',
// ]);

// Route::post('register', [
//     'uses' => 'Auth\AuthController@postRegister',
//     'as' => 'admin.auth.register',
// ]);

// Route::get('password/reset/{token?}', [
//     'uses' => 'PasswordController@showResetForm',
//     'as' => 'admin.password.reset',
// ]);

// Route::post('password/reset', [
//     'uses' => 'PasswordController@reset',
//     'as' => 'admin.password.reset',
// ]);

// Route::post('password/email', [
//     'uses' => 'PasswordController@sendResetLinkEmail',
//     'as' => 'admin.password.email',
// ]);