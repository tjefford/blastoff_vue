<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('launchList', 'LaunchLibraryController@list');
