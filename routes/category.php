<?php 

Route::group(['prefix' => 'categories', 'middleware' => 'auth'], function () {
    Route::get('/', 'CategoryController@index')->name('category.index');
});