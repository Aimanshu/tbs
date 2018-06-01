<?php



Route::get('/clear-cache', function() {

    $exitCode = Artisan::call('config:cache');

    // return what you want

});

// Route::get('/', 'PayPalController@getIndex');
Route::get('/paypal/ec-checkout', 'PayPalController@getExpressCheckout');
Route::get('/paypal/ec-checkout-success', 'PayPalController@getExpressCheckoutSuccess');
Route::get('/paypal/adaptive-pay', 'PayPalController@getAdaptivePay');
Route::post('/paypal/notify', 'PayPalController@notify');


Route::get('/', 'HomeController@home')->name('home');

Route::get('/admin', function () {return view('admin/admin');});

//For All Role Accoding Dashboard Open
Route::get('/dashboard', function () 
{
    if (auth()->user()->role == 1) 
    {
     return view('super_admin/dashboard');
    }
     elseif(auth()->user()->role == 2)
    {
      return view('admin/dashboard');
    }
      elseif(auth()->user()->role == 3) 
    {
      return redirect('/trader/enquiry/list');
      // return view('traders/dashboard');
    }
     else
    {
      return redirect('/show/mycategory');
        // return view('users/dashboard');
    }
})->middleware('auth');

Route::get('/admin_login', function () {return view('adminlogin');});

Route::get('/registation', 'HomeController@tradersreg')->name('registation');
Route::get('/superadmin_dashboad', function () {return view('superadmin/superadmindashboad');});

Route::get('/home', 'HomeController@index')->name('home_home');
Route::GET('/categories/cat', 'HomeController@categories')->name('categories');

Auth::routes();

Route::POST('/answer_save/{id}','HomeController@answersave');

// Route::POST('/answer_saved/{id}/{city}',function(){
//   return "DDD";
// });

Route::get('/check_login', 'LoginManuallyController@index');
Route::POST('/checkloginfn','LoginManuallyController@checklogin');

//for menu Login only
Route::Post('/checkloginfn2','LoginManuallyController@checklogin2');

Route::get('/get/question/category/{id}','HomeController@GetQuestionForMenu');

Route::get('sendbasicemail','MailController@basic_email');

Route::Post('/traders_registation','HomeController@TradersRegistation');

// Here is All For Menu Item 
Route::get('privacy_policy',function(){return view('home/privacy');});
Route::get('term_and_conditions',function(){return view('home/terms');});

Route::GET('logins',function(){return view('home/login');});

Route::get('contact_us',function(){return view('home/contactus');});
Route::get('faqs',function(){return view('home/faq');});
Route::get('about_us',function(){return view('home/aboutus');});
Route::get('forget_password',function(){return view('home/forgets');});    
Route::Post('/fromcontact','ContactController@Store');
Route::get('/reset/{token}','HomeController@SendResetLink');    

Route::Post('/forget_send_link','HomeController@ForgetPasswordSend');

Route::Post('/reset_password_change/{token}','HomeController@ResetForgetPassword');

// Route::get('/hima',  function(){
//   return view('/index');
// });

// Route::get('auth/{provider}', 'SocialAuthController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'SocialAuthController@handleProviderCallback');

Route::get('/auth/{provider}', 'SocialAuthController@redirectToProvider')->name('socaillogin');
Route::get('/auth/{provider}/callback', 'SocialAuthController@handleProviderCallback');


Route::POST('/enquriry_form/{id}',  'HomeController@submit_enquriry_form')->name('submit_enquriry_form');
// Route::get('/enquriry_form/{slug}/question',  'HomeController@enquriry_form')->name('enquriry_form');
Route::get('/{slug}',  'HomeController@enquriry_form');

Route::get('/payment/status/{status}',  'PaymentController@getPaymentStatus')->name('payment_status');

