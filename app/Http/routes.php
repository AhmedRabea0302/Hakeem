<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Change Language
Route::get('/admin-panel/lang/{locale}', 'admin\HomeController@setLang')->name('site_lang');
Route::get('/lang/{locale}', 'site\HomeController@setLang')->name('site_langa');

// Logout
Route::get('/logout/', 'admin\HomeController@logOut')->name('logout');

// Login
Route::get('login/', 'admin\HomeController@getLogin')->name('auth.login');
Route::post('logedin/', 'admin\HomeController@postLogin')->name('postLogin');
// Admin Panel
Route::group(['prefix' => 'admin-panel','namespace' => 'admin' ,'middleware' => 'auth'], function () {
    // Home
    Route::get('/', 'HomeController@getIndex')->name('home');

    // Settings
    Route::get('/settings', 'SettingsController@getIndex')->name('settings');
    Route::get('/footer', 'StaticPagesController@getFooter')->name('footer_static');
    Route::post('/settings', 'SettingsController@updateSettings')->name('update_settings');

    // Static Pages
    //Home Page
    Route::get('/home-page', 'StaticPagesController@getHomeIndex')->name('home_page_static');
    Route::post('/home-page', 'StaticPagesController@updateHome')->name('update_home_page');
    Route::post('update-footer', 'StaticPagesController@updateFooter')->name('update_footer_page');

    // Career Page
    Route::get('/career-page', 'StaticPagesController@getCareerIndex')->name('career_page_static');
    Route::post('/career-page', 'StaticPagesController@updateCareer')->name('update_career_page');

    // Partners Page
    Route::get('/partner-page', 'StaticPagesController@getPartnerIndex')->name('partner_page_static');
    Route::post('/partner-page', 'StaticPagesController@updatePartner')->name('update_partner_page');

    // Social Links
    Route::get('/social-links', 'SocialLinksController@getSocialIndex')->name('social_links');
    Route::post('/social-links', 'SocialLinksController@updateSocial')->name('social_links');

    // Join to career
    Route::get('/career-message', 'CareerController@getCareerIndex')->name('career_message');

    // Become Partner Form
    Route::get('/become-partner', 'PartnerController@getPartnerIndex')->name('become_partner_admin');
    Route::get('/reply/{id}', 'PartnerController@returnMailBlade')->name('send_reply_to_partner');
    Route::get('/reply-sms/{id}', 'PartnerController@returnMailBladeSms')->name('send_sms_to_partner');
    Route::post('/send-mail', 'PartnerController@sendMail')->name('send_mail');
    Route::post('/send-sms', 'PartnerController@sendSms')->name('send_sms');
    Route::get('/delete-mail/{id}', 'CareerController@deleteMessage')->name('delete_message');
    Route::get('/delete-message', 'PartnerController@deleteMessagePartner')->name('delete_message_partner');

    // Users Page
    Route::get('/users', 'UsersController@getUsersIndex')->name('users');
    Route::post('/add-user', 'UsersController@addUser')->name('add_user');
    Route::post('/update-user', 'UsersController@updateUser')->name('update_user');
    Route::post('/delete-user', 'UsersController@deleteUser')->name('delete_user');

});

Route::group(['namespace' => 'site'], function () {
    // Home
    Route::get('/', 'HomeController@getHomeIndex')->name('site_home');
    Route::post('/gather', 'HomeController@gather')->name('send_gather');
    route::post('/become-partner', 'HomeController@becomePartner')->name('become_partner');

    // Join To Career
    Route::get('/join-career', 'CareerController@getCareerIndex')->name('join_to_career');
    Route::get('/partner', 'PartnerController@getPartnerIndex')->name('partner');

});