<?php

//By Himanshu To Show Add Admin Page
Route::get('/addadmin', function () {
	return view('admin/addadmin');
});


 
//By Himanshu Super Admin add Role Type 
Route::POST('/addrole','SuperAdmin\SuperAdminController@SuperAdminAddRole');

//By Himanshu For Adding Category
// Route::POST('/category_adding','SuperAdmin\Category\AddCategoryController@store');

//By Himanshu To Show Add Admin Page
Route::get('/list/admin', 'SuperAdmin\Admin\AdminController@index');
Route::get('/create/admin', 'SuperAdmin\Admin\AdminController@create');
Route::GET('/admin/category/match/{id}', 'SuperAdmin\Admin\AdminController@CheckCategory');
Route::post('/update/{id}/admin', 'SuperAdmin\Admin\AdminController@update')->name('update_admin_cat');

Route::get('/list/category', 'SuperAdmin\Category\AddCategoryController@index');
Route::get('/create/category', 'SuperAdmin\Category\AddCategoryController@create');

//By Gaurav To Show Add Admin Page
Route::get('/list/main_category', 'SuperAdmin\Category\AddCategoryController@list_main_category')->name('main_category');
Route::get('/create/main_category', 'SuperAdmin\Category\AddCategoryController@create_main_category')->name('create_main_category');
Route::get('/assign_list/main_category', 'SuperAdmin\Category\AddCategoryController@assign_list_main_category')->name('assign_list_main_category');
Route::get('/assign/main_category', 'SuperAdmin\Category\AddCategoryController@assign_main_category')->name('assign_main_category');
Route::POST('/main_category_adding','SuperAdmin\Category\AddCategoryController@main_category_add');
Route::PATCH('/category/{id}', 'SuperAdmin\Category\AddCategoryController@update_category')->name('update_cate');
Route::POST('/assign_category_to_sub_category','SuperAdmin\Category\AddCategoryController@attached_cat_to_maincat');


//By Gaurav To Upadte Status 
Route::PATCH('/update_admin/{id}', 'SuperAdmin\Admin\AdminController@update_status_admin')->name('update_status');
Route::PATCH('/update_main_category/{id}', 'SuperAdmin\Category\AddCategoryController@update_status_main_category')->name('main_category_update');
Route::PATCH('/update_category/{id}', 'SuperAdmin\Category\AddCategoryController@update_status_category')->name('category_update');
Route::PATCH('/update_status/{id}/user', 'SuperAdmin\SuperAdminController@update_status_user')->name('user_update');
Route::PATCH('/update_enquiry/{id}', 'SuperAdmin\SuperAdminController@update_status_enquiry')->name('enquiry_update');

//update assigned category to admin
Route::PATCH('/update_assign_category/{id}', 'SuperAdmin\SuperAdminController@assigned_category_update')->name('update_admin_assign_cat');
Route::PATCH('/delete/{id}', 'SuperAdmin\SuperAdminController@assigned_category_delete')->name('delete_assign_category');


Route::POST('/category_adding','SuperAdmin\Category\AddCategoryController@store');
Route::PATCH('/update/{id}/category', 'SuperAdmin\Category\AddCategoryController@update')->name('update_cat');

//By Himanshu Show Assign Category On Dashboard
Route::get('/create/category_assign','SuperAdmin\SuperAdminController@joinadmincategoryfn');

//By Himanshu Assign category To Admin
Route::POST('/add-category-to-admin','SuperAdmin\SuperAdminController@AdminCategorySendDataBase');

// By Gaurav To Show Add Traders Page
Route::get('/list/traders', 'SuperAdmin\Traders\TradersController@index')->name('traders');
Route::get('/create/traders', 'SuperAdmin\Traders\TradersController@create')->name('create_traders');
Route::get('/list_assign','SuperAdmin\SuperAdminController@GetAllCategory');
Route::get('/list/user','SuperAdmin\SuperAdminController@show_user_list');

//on use userdashboard route
Route::get('/user/profile','SuperAdmin\SuperAdminController@profile')->name('user');
Route::PATCH('/update/{id}/user', 'SuperAdmin\SuperAdminController@update_user_dash')->name('update_user');
Route::get('/show/myquestion/{id}','SuperAdmin\SuperAdminController@ShowMyQuestion');
Route::get('/show/mycategory','SuperAdmin\SuperAdminController@ShowMyCategory');
Route::PATCH('/category_status/{id}', 'SuperAdmin\Category\AddCategoryController@UpdateStatusCategory')->name('category_status');



// By Gaurav Trader Dashboard
Route::get('/trader/profile','Trader\TraderController@index')->name('trader');
Route::POST('/update/{id}/trader','Trader\TraderController@update_tra')->name('update_trader');

//By Himanshu To Show Enquiry Into Superadmin Page
Route::get('/list/enquiry', 'SuperAdmin\SuperAdminController@GetAllEnquiry');

Route::get('/add/question/{id}', 'SuperAdmin\SuperAdminController@ViewAddQuestion');
Route::POST('/questions/{id}', 'SuperAdmin\SuperAdminController@AddQuestionDataBase');

Route::get('/show/question/{slug}', 'SuperAdmin\SuperAdminController@ShowQuestion');

//Traders Dashboard Work
Route::PATCH('/traders_statusupdate/{id}', 'SuperAdmin\SuperAdminController@TradersStatus')->name('traders_status_update');

Route::POST('/change/passwords/{id}', 'SuperAdmin\SuperAdminController@ChangePassword')->name('change_password');

Route::POST('/add/passwords/user/{id}', 'SuperAdmin\SuperAdminController@AddUserPassword')->name('add_user_password');

Route::GET('/contact/list', 'SuperAdmin\SuperAdminController@AllContactsGet')->name('contact_us_list');

Route::POST('/traders/update/{id}', 'SuperAdmin\Traders\TradersController@UpdateTraderDetails')->name('update_trader_details');

Route::POST('/users/update/{id}', 'SuperAdmin\SuperAdminController@UpdateUserDetails')->name('update_user_details');

Route::GET('/getsubcategories/{id}','SuperAdmin\SuperAdminController@GetSubCategoryDetails');

Route::GET('/create/advertisement', 'SuperAdmin\SuperAdminController@CreateAdvertisement');

Route::POST('/add_advertiment', 'SuperAdmin\SuperAdminController@SaveAdvertisement');

Route::GET('/list/advertiments', 'SuperAdmin\SuperAdminController@GetAdvertisement');

Route::PATCH('/update/advertiment/{id}', 'SuperAdmin\SuperAdminController@UpdateAdvertiment')->name('update_advertiment');

Route::POST('/superadmin/edit/questions/{id}','SuperAdmin\SuperAdminController@SuperadminEditQuestions')->name('superadmin_edit_questions');

Route::GET('/edit/questions/{id}','SuperAdmin\SuperAdminController@EditQuestion')->name('edit_questions');

Route::GET('/payment/list', 'SuperAdmin\SuperAdminController@PaymentList');

Route::GET('/api/single/questions/{id}','SuperAdmin\SuperAdminController@ApiSingleQuestions')->name('api_single_questions');

Route::POST('/advertiment/status/update/{id}','SuperAdmin\SuperAdminController@AdvertimentStatusUpdate')->name('advertiment_status_update');


