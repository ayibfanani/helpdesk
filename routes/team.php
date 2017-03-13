<?php

Route::group(['prefix' => 'teams', 'middleware' => 'auth'], function () {
    Route::get('/', 'UserController@index')->name('team.index');
});