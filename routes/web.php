<?php

Route::group(['namespace'=>'Main\Front'], function (){
    Route::get('/', 'MainController@index')->name('front.main.index');
    Route::get('/reservation', 'ReservationController@index')->name('front.reserve.index');
    Route::get('/reservation/add/{room_id}', 'ReservationController@add')->name('front.reserve.add');
    Route::post('/reservation/store/{room_id}', 'ReservationController@store')->name('front.reserve.store');
    Route::get('/rules', 'RulesController@index')->name('front.rules.index');
    Route::get('/about_us', 'AboutUsController@index')->name('front.aboutus.index');
    Route::get('/contact_us', 'ContactUsController@index')->name('front.contactus.index');
    Route::post('/contact_us/store', 'ContactUsController@store')->name('front.contactus.store');
});

Route::group(['namespace'=>'Main\Admin'], function (){
    Route::get('/panel', 'MainController@index')->name('admin.main.index');
    Route::get('/home', 'MainController@index')->name('admin.main.index');

    Route::get('/account', 'AccountController@index')->name('admin.account.index');
    Route::post('/account', 'AccountController@store')->name('admin.account.store');
    Route::get('/account/insert', 'AccountController@insert')->name('admin.account.insert');
    Route::get('/account/delete/{account_id}', 'AccountController@delete')->name('admin.account.delete');
    Route::get('/account/edit/{account_id}', 'AccountController@edit')->name('admin.account.edit');
    Route::post('/account/edit/{account_id}', 'AccountController@update')->name('admin.account.update');

    Route::get('/message', 'MessageController@index')->name('admin.message.index');
    Route::get('/message/delete/{message_id}', 'MessageController@delete')->name('admin.message.delete');
    Route::get('/message/edit/{message_id}', 'MessageController@edit')->name('admin.message.edit');
    Route::post('/message/edit/{message_id}', 'MessageController@update')->name('admin.message.update');

    Route::get('/reserve/{status}', 'ReservationController@index')->name('admin.reservation.index');
    Route::get('/reserve/Pending/delete/{reserve_id}', 'ReservationController@delete')->name('admin.reservation.delete');
    Route::get('/reserve/Pending/edit/{reserve_id}', 'ReservationController@edit')->name('admin.reservation.edit');
    Route::get('/reserve/Pending/Checkout/{reserve_id}', 'ReservationController@Checkout')->name('admin.reservation.Checkout');
    Route::post('/reserve/Pending/edit/{reserve_id}', 'ReservationController@update')->name('admin.reservation.update');

    Route::get('/room', 'RoomController@index')->name('admin.room.index');
    Route::post('/room', 'RoomController@store')->name('admin.room.store');
    Route::get('/room/insert', 'RoomController@insert')->name('admin.room.insert');
    Route::get('/room/delete/{room_id}', 'RoomController@delete')->name('admin.room.delete');
    Route::get('/room/edit/{room_id}', 'RoomController@edit')->name('admin.room.edit');
    Route::post('/room/edit/{room_id}', 'RoomController@update')->name('admin.room.update');

    Route::get('/rule', 'RuleController@index')->name('admin.rule.index');
    Route::post('/rule', 'RuleController@store')->name('admin.rule.store');
    Route::get('/rule/insert', 'RuleController@insert')->name('admin.rule.insert');
    Route::get('/rule/delete/{rule_id}', 'RuleController@delete')->name('admin.rule.delete');
    Route::get('/rule/edit/{rule_id}', 'RuleController@edit')->name('admin.rule.edit');
    Route::post('/rule/edit/{rule_id}', 'RuleController@update')->name('admin.rule.update');

    Route::get('/slider', 'SliderController@index')->name('admin.slider.index');
    Route::post('/slider', 'SliderController@store')->name('admin.slider.store');
    Route::get('/slider/insert', 'SliderController@insert')->name('admin.slider.insert');
    Route::get('/slider/delete/{slider_id}', 'SliderController@delete')->name('admin.slider.delete');
    Route::get('/slider/edit/{slider_id}', 'SliderController@edit')->name('admin.slider.edit');
    Route::post('/slider/edit/{slider_id}', 'SliderController@update')->name('admin.slider.update');
});

Auth::routes();

