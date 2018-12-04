<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


        /*********------------Front-------------------**********
        **----------***------------View------------***--------*/



  /***Get All Pages With all Content [Start Work with pagesController]*****/


Route::get('/',[
	'uses'=>'HomeController@getIndexPage',
	'as'=>'home.index'
]);

Route::get('/lookingforblood',[
  'uses'=>'PagesController@getlookingforbloodpage',
  'as'=>'blood.looking'
]);

Route::get('/alldonorlists',[
  'uses'=>'PagesController@getAllDonorLists',
  'as'=>'donor.lists'
]);
Route::get('/donor/profile/{id}',[
  'uses'=>'PagesController@getDonorProfileViewPage',
  'as'=>'donor.view.profile'
]);
Route::get('/analysis',[
  'uses'=>'AnalysisController@getAnaylysisPage',
  'as'=>'result.analysis'
]);
Route::post('/analysis/search/result',[
  'uses'=>'AnalysisController@postAnaylysisResult',
  'as'=>'result.search.analysis'
]);


Route::group(['prefix'=>'donor/'],function(){
   
    Route::get('/mail/{id}',[
        'uses'=>'MailController@getMailtoDonorPage',
        'as'=>'sent.mail'
    ]);

     Route::post('/mail/send',[
        'uses'=>'MailController@postMailtoDonor',
        'as'=>'post.sent.mail'
    ]);
  
});



Route::group(['prefix'=>'blood'],function(){
     Route::resource('/requests','BloodRequestController');
     Route::get('/request/check/{id}',[
        'uses'=>'PagesController@getCheckCodePageForBloodRequest',
        'as'=>'check.code'
    ]);
    Route::post('/request/check/{id}',[
        'uses'=>'PagesController@postCheckCodeForBloodRequest',
        'as'=>'check.code'
    ]);
});

Route::group(['prefix'=>'blog'],function(){
    Route::get('/',[
      'uses'=>'PagesController@getBlogPage',
      'as'  => 'pages.blog'
   ]);
    Route::get('/{slug}',[
      'uses'=>'PagesController@getBlogSinglePage',
      'as'  => 'blog.single'
   ]);
    Route::get('/category/{name}',[
      'uses'=>'PagesController@getPostByCategory',
      'as'  => 'postby.category'
   ]);
   Route::post('/search',[
      'uses'=>'PagesController@postSearchResult',
      'as'  => 'postby.search'
   ]);
});

Route::group(['prefix'=>'search'],function(){
    
     Route::get('/donor',[
        'uses'=>'SearchDonorController@getSearchDonorPage',
        'as'=>'donor.search'
    ]);
    Route::get('/donor/blood-group/{group}',[
        'uses'=>'SearchDonorController@getDonorByBloodGroup',
        'as'=>'donor.by.bloodgroup'
    ]);
    Route::get('/donor/district/{district}',[
        'uses'=>'SearchDonorController@getDonorByDistrict',
        'as'=>'donor.by.district'
    ]);
});




Route::group(['middleware'=>'auth'],function(){
  
Route::group(['prefix'=>'profile'],function(){

  Route::get('/',[
    'uses'=>'DonorPofileController@getProfilePage',
    'as'=>'user.profile'
  ]);

  Route::get('/update',[
    'uses'=>'DonorPofileController@getUpdateProfilePage',
    'as'=>'update.donorprofile'
  ]);
  Route::put('/update',[
    'uses'=>'DonorPofileController@postUpdateProfilePage',
    'as'=>'update.donorprofile'
  ]);
  Route::get('/password',[
    'uses'=>'DonorPofileController@getChangePasswordPage',
    'as'=>'update.donorpassword'
  ]);

  Route::put('/password',[
    'uses'=>'DonorPofileController@postChangePasswordPage',
    'as'=>'update.donorpassword'
  ]);

  Route::get('/photo',[
    'uses'=>'DonorPofileController@getChangePofilePicPage',
    'as'=>'update.donorpropic'
  ]);

  Route::put('/photo',[
    'uses'=>'DonorPofileController@postChangePofilePic',
    'as'=>'update.donorpropic'
  ]);

  Route::get('/privacy',[
    'uses'=>'DonorPofileController@getProfilePrivacyPage',
    'as'=>'update.donorprivacy'
  ]);

  Route::put('/privacy',[
    'uses'=>'DonorPofileController@postProfilePrivacyPage',
    'as'=>'update.donorprivacy'
  ]);
 

   Route::resource('/donations','DonationController');
 });


});


/***User Login & Registration System Start*****/
Route::group(['middleware'=>'guest'],function(){

  Route::get('/login',[
    'uses'=>'UserAuthController@getLoginPage',
    'as'=>'user.login'
  ]);
  Route::post('/login',[
    'uses'=>'UserAuthController@postLogin',
    'as'=>'user.login'
  ]);
  Route::get('/register',[
    'uses'=>'UserAuthController@getRegisterPage',
    'as'=>'user.register'
  ]);
  Route::post('/register',[
    'uses'=>'UserAuthController@postRegister',
    'as'=>'user.register'
  ]);
  Route::get('/preregister',[
    'uses'=>'UserAuthController@getPreRegisterPage',
    'as'=>'user.preregister'
  ]);

  Route::post('/preregister',[
    'uses'=>'UserAuthController@postPreRegister',
    'as'=>'user.preregister'
  ]);

  Route::get('/password/email/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

  Route::post('/password/email/reset', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
  
  Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset.form');

  Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');

  

});

Route::get('/logout',[
  'uses'=>'Auth\LoginController@userLogout',
  'as'=>'user.logout'
]);


/***User Login & Registration System End*****/











/*********------------ADMIN-------------------**********
        **----------***------------PANEL------------***--------*/
Route::group(['middleware'=>'auth:admin'],function(){

  Route::get('/myadmin',[
    'uses'=>'AdminController@getIndex',
    'as'  => 'admin.index'
  ]);

});



Route::group(['middleware'=>'auth:admin','prefix'=>'myadmin'],function(){

  Route::get('/admin-logout',[
    'uses'=>'AdminAuthController@getLogOut',
    'as'  => 'admin.logout'
  ]);
  Route::get('/all/donor-lists',[
    'uses'=>'Myadmin\DashboardController@getDonorLists',
    'as'  => 'myadmin.alldonor.lists'
  ]);
  Route::delete('/all/donor-lists/{id}',[
    'uses'=>'Myadmin\DashboardController@deleteDonor',
    'as'  => 'myadmin.delete.donor'
  ]);
  Route::get('/all/blood-requests',[
    'uses'=>'Myadmin\DashboardController@getBloodRequestLists',
    'as'  => 'myadmin.bloodrequests.lists'
  ]);
  Route::delete('/all/blood-request/{id}',[
    'uses'=>'Myadmin\DashboardController@deleteBloodRequest',
    'as'  => 'myadmin.delete.bloodrequest'
  ]);

  /**Category Start**/
Route::resource('categories','Myadmin\CategoryController');
 /**Category End**/

/**For Social Site Link Start**/
Route::resource('social-site','Myadmin\SocialSiteController');
   /**For Social Site Link End**/

 
  /**Blog Post Start**/
Route::resource('posts','Myadmin\PostController');
      /**Blog Post End**/

      /*********  Site Option OptionController Start  ********/
 Route::get('/site-option',[
  'uses'=>'Myadmin\OptionController@getSiteOption',
  'as'  => 'site.options'
]);
  Route::post('/site-option',[
  'uses'=>'Myadmin\OptionController@postSiteOption',
  'as'  => 'site.options'
]);
 /********** Site Option OptionController Start *****/

 /*******Image Controller Start**********/
Route::get('/get-image',[
  'uses'=>'Myadmin\ImageController@getImagepage',
  'as'  => 'get.image'
]);
Route::post('/get-image',[
  'uses'=>'Myadmin\ImageController@postStoreImage',
  'as'  => 'get.image'
]);
Route::get('/showimages',[
  'uses'=>'Myadmin\ImageController@getShowImage',
  'as'  => 'show.image'
]);
Route::delete('deleteimage/{id}',['uses'=>'Myadmin\ImageController@DeleteImage', 'as'=>'image.delete']);
  /*******Image Controller End**********/


});



/***Login & Register Start*****/ 
Route::group(['middleware'=>'guest:admin','prefix'=>'myadmin'],function(){

  Route::get('/login',[
    'uses'=>'AdminAuthController@getLogin',
    'as'  => 'admin.login'
  ]);
  Route::post('/login',[
    'uses'=>'AdminAuthController@postLogin',
    'as'  => 'admin.login'
  ]);
  Route::get('/register',[
    'uses'=>'AdminAuthController@getRegistrationForm',
    'as'  => 'admin.register'
  ]);
  Route::post('/register',[
    'uses'=>'AdminAuthController@postRegister',
    'as'  => 'admin.register'
  ]);

});

/***Login & Register End*****/ 