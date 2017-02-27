<?php 

Route::group(['prefix' => 'tickets', 'middleware' => 'auth'], function () {
    Route::get('/', 'TicketController@index')->name('ticket.index');
});