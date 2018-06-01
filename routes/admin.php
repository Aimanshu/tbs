<?php


Route::get('/AdminEnquiry', 'Admin\AdminController@ViewEnquiry')->name('admin_enquiry_list');

Route::get('/AdminEnquiryAssign/{id}', 'Admin\AdminController@AssignEnquiry')->name('admin_enquiry_assign');

Route::POST('/enquiry_traders/{id}','Admin\AdminController@UpdateEnquiry')->name('enquiry_to_trader');

Route::PATCH('/update/{id}', 'Admin\AdminController@update_status')->name('update_status_admin');

Route::get('/admin/profile', 'Admin\AdminController@show_admin')->name('admin');

Route::PATCH('/update/{id}/admin', 'Admin\AdminController@update_admin_dash')->name('update_admin');

Route::GET('admin/traders/list', 'Admin\AdminController@AdminTradersList');

Route::POST('/admin/traders_registation','Admin\AdminController@AdminTradersRegistation');

Route::get('/admin/traders/list/get', 'Admin\AdminController@AdminTraderList');

Route::POST('/admin/traders/update/{id}', 'Admin\AdminController@AdminUpdateTraderDetails')->name('admin_update_trader_details');

Route::get('/admin/proposal/list/{id}', 'Admin\AdminController@AdminProposalList');

Route::GET('/admin/approve/status/{id}', 'Admin\AdminController@AdminApproveStatus')->name('admin_approve_status');





