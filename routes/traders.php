<?php

// use trader in every route before any route like below

Route::get('/trader/orders', 'Trader/TraderController@orders')->name('trader_orders');

//By Himanshu For View Traders All List
Route::get('/trader/enquiry/list', 'Trader\TraderController@ViewAllRequestList')->name('trader_enquiry_list');

Route::get('/trader/send/proposal/{id}', 'Trader\TraderController@TraderSendProposal')->name('trader_send_proposal');

Route::POST('/trader/save/proposal/{id}', 'Trader\TraderController@SaveProposal')->name('save_proposal');

Route::get('/trader/proposal/list', 'Trader\TraderController@TraderProposalList');

Route::POST('/payment/add-funds/paypal', 'PaymentController@payWithpaypal')->name('payWithpaypal');










