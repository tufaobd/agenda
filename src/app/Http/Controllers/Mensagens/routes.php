<?php
Route::name('mensagens.')->group(function () {
    Route::get('/mensagens', ['as' => 'index', 'uses' => 'Mensagens\MensagensController@index']);
    Route::get('/mensagens/create', ['as' => 'create', 'uses' => 'Mensagens\MensagensController@create']);
    Route::post('/mensagens/store', ['as' => 'store', 'uses' => 'Mensagens\MensagensController@store']);
    Route::get('/mensagens/edit/{mensagem}', ['as' => 'edit', 'uses' => 'Mensagens\MensagensController@edit']);
    Route::put('/mensagens/update/{mensagem}', ['as' => 'update', 'uses' => 'Mensagens\MensagensController@update']);
    Route::get('/mensagens/destroy/{mensagem}', ['as' => 'destroy', 'uses' => 'Mensagens\MensagensController@destroy']);
});




