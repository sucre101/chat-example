<?php

Route::get('/', 'ChatController@index');

Route::post('/chat', 'ChatController@handle');
