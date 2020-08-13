<?php

Route::group(['namespace'=>'Coldxpress\Ticket\Http\Controllers'],function(){
    Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => 'tickets'], function () {
        Route::get('/', 'TicketController@index')->name('tickets.index');
        Route::post('/store', 'TicketController@store')->name('tickets.store');
        Route::get('/filtered_tickets/{filter}','TicketController@filteredTickets')->name('tickets.filtered');

    });
    });
});

