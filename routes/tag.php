<?php 

Route::group(['prefix' => 'tags', 'middleware' => 'auth'], function () {
    Route::get('/', 'TagController@index')->name('tag.index');
});