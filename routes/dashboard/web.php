<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')
    ->name('dashboard.')
//    ->middleware(['auth','role:super_admin,admin'])
    ->group(function (){

    //dashboard.welcome  - welcome_Route
        Route::get('/','welcomeController@index')->name('welcome');

    //category Routes
        Route::resource('categories','CategoryController')->except(['show']);

    //sub Categories
        Route::resource('sub_categories','SubCategoryController')->except(['show']);

    //consultation_requests
        Route::resource('consultation_requests','Consultation_requestsController')->except(['show']);

     //serviceItem
        Route::resource('serviceItem','ServiceItemController')->except(['show']);

     //advertisement
        Route::resource('advertisement','AdvertisementController')->except(['show']);

     //advertisementItem
        Route::resource('advertisementItems','AdvertisementItemsController')->except(['show']);

    //WhoAreWe
            Route::resource('WhoAreWes','whoAreWeController')->except(['show']);

    //Role Route
        Route::resource('roles','RoleController');

    //User Route
        Route::resource('users','UserController');

    //Donation Route
        Route::resource('donations','DonationController');

        // Setting Route
        Route::get('/settings/social_login','SettingController@Social_Login')->name('settings.social_login');
        Route::get('/settings/social_link','SettingController@Social_Links')->name('settings.social_links');
        Route::post('/social_links','SettingController@store')->name('settings.store');


});
