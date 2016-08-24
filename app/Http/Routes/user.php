<?php
Route::auth();

/*************************----Dashboard---************************************/
Route::group(['middleware' => ['auth']], function ($router) {
    // ruta/admin/dashboard
    Route::get('/account', function ()
    {
        return view('accounts.myaccount');
    });
    Route::get('/account/edit', function ()
    {
        return  view('accounts.edit');
    });

    // Route::put('/configuracion/update', 'SettingController@update');



});
