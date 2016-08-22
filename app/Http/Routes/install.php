<?php

/*************************----INSTALACION---************************************/
//vista de mensaje de bienvenida                                                                                    #
Route::get('/', "InstallController@index");                                                                      #
//vista del primero formulario                                                                                           #
Route::get('/first', "InstallController@viewFirst");                                                          #
// post del primer formulario                                                                                             #
Route::post('/first', "InstallController@createFirst");                                                     #
                                                                                                                                             #
Route::get('/second', "InstallController@viewSecond");                                                #
                                                                                                                                             #
Route::post('/second', "InstallController@createSecond");                                           #
/******************************************************************************/