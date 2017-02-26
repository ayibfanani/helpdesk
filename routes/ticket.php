<?php 

Route::group(['prefix' => 'tickets'], function () {
    Route::get('/', 'TicketController@index')->name('ticket.index');
});