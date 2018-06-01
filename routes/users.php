<?php

// use user in every route before any route like below

Route::get('/user/requests', 'User\UserController@requests')->name('user_requests');

Route::get('/users/approve/status/{id}', 'User\UserController@UsersApproveStatus')->name('users_approve_status');

Route::get('/user/proposal/list/{id}', 'User\UserController@UserProposalList')->name('user_proposal_list');

Route::get('/users/approve/status/{id}', 'User\UserController@UsersApproveStatus2')->name('users_approve_status');





