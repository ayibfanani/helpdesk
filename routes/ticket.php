<?php 

Route::group(['prefix' => 'tickets', 'middleware' => 'auth'], function () {
    Route::get('/', 'TicketController@index')->name('ticket.index');
    Route::get('{id}/edit', 'TicketController@edit')->name('ticket.edit');
});