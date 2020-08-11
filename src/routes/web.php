<?php

Route::group(['namespace'=>'Coldxpress\Ticket\Http\Controllers'],function(){
    Route::get('hello','TicketController@index');
});

