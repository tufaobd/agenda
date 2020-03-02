<?php

Route::name('contatos.')->group(function () {
    Route::get('/contatos', ['as' => 'index', 'uses' => 'Contatos\ContatosController@contatos']);
    Route::get('/contatos/create', ['as' => 'create', 'uses' => 'Contatos\ContatosController@create']);
    Route::post('/contatos/store', ['as' => 'store', 'uses' => 'Contatos\ContatosController@store']);
    Route::get('/contatos/edit/{contato}', ['as' => 'edit', 'uses' => 'Contatos\ContatosController@edit']);
    Route::put('/contatos/update/{contato}', ['as' => 'update', 'uses' => 'Contatos\ContatosController@update']);
    Route::get('/contatos/destroy/{contato}', ['as' => 'destroy', 'uses' => 'Contatos\ContatosController@destroy']);

});



