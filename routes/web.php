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

Route::group(['prefix' => 'admin'], function() {
    Route::middleware('auth:admin')->namespace('Backoffice')->group(function() {
        Route::get('/', [
            'as'   => 'admin.index',
            'uses' => 'AdminController@getIndex'
        ]);

        Route::resource('koi', 'KoiController');
        Route::resource('store', 'StoreController');
        Route::resource('farm', 'FarmController');
        Route::resource('strain', 'StrainController');
        Route::resource('category', 'CategoryController');
        Route::resource('news', 'NewsController');

        Route::delete('event/{event}/koi/{koi}/delete/{register}', [
            'as'   => 'event.koi.delete',
            'uses' => 'EventController@delete'
        ]);
        Route::get('event/{event}/koi/{koi}/winner/{register}', [
            'as'   => 'event.koi.winner',
            'uses' => 'EventController@winner'
        ]);
        Route::post('event/{event}/koi/{koi}', [
            'as'   => 'event.koi.register',
            'uses' => 'EventController@register'
        ]);
        Route::get('event/{event}/koi/{koi}', [
            'as'   => 'event.koi.detail',
            'uses' => 'EventController@showKoiDetail'
        ]);
        Route::resource('event', 'EventController');

        Route::get('user/{user}/order', [
            'as'   => 'user.order',
            'uses' => 'UserController@getOrder'
        ]);
        Route::get('user/{user}/koi', [
            'as'   => 'user.koi',
            'uses' => 'UserController@getKoi'
        ]);
        Route::resource('user', 'UserController');
    });

    Route::group(['namespace' => 'Admin'], function() {
        Route::get('login', [
            'as'   => 'admin.login',
            'uses' => 'LoginController@showLoginForm'
        ]);

        Route::post('login', [
            'uses' => 'LoginController@login'
        ]);

        Route::get('logout', [
            'as'   => 'admin.logout',
            'uses' => 'LoginController@logout'
        ]);

        Route::get('register', [
            'as'   => 'admin.register',
            'uses' => 'RegisterController@showRegistrationForm'
        ]);

        Route::post('register', [
            'uses' => 'RegisterController@register'
        ]);
    });

});


Route::group(['prefix' => 'admin'], function() {
    Route::middleware('auth:admin')->namespace('Backoffice')->group(function() {
        Route::get('/', [
            'as'   => 'dashboard.index',
            'uses' => 'DashboardController@getIndex'
        ]);

        Route::Resource('manage', 'ManageController');
        Route::resource('partner', 'PartnerController');
        Route::resource('country', 'CountryController');
        Route::resource('koi', 'KoiController');
        Route::resource('store', 'StoreController');
        Route::resource('farm', 'FarmController');
        Route::resource('strain', 'StrainController');
        Route::resource('category', 'CategoryController');
        Route::resource('news', 'NewsController');

        Route::get('event/{event}/koi/{koi}/winner/{user}', [
            'as'   => 'event.koi.winner',
            'uses' => 'EventController@setWinner'
        ]);
        Route::get('event/{event}/koi/{koi}', [
            'as'   => 'event.koi.detail',
            'uses' => 'EventController@showKoiDetail'
        ]);
        Route::resource('event', 'EventController');

        Route::get('user/{user}/order', [
            'as'   => 'user.order',
            'uses' => 'UserController@getOrder'
        ]);
        Route::get('user/{user}/koi', [
            'as'   => 'user.koi',
            'uses' => 'UserController@getKoi'
        ]);
        Route::resource('user', 'UserController');
    });

    Route::group(['namespace' => 'Admin'], function() {
        Route::get('login', [
            'as'   => 'admin.login',
            'uses' => 'LoginController@showLoginForm'
        ]);

        Route::post('login', [
            'uses' => 'LoginController@login'
        ]);

        Route::get('register', [
            'as'   => 'admin.register',
            'uses' => 'RegisterController@showRegistrationForm'
        ]);

        Route::post('register', [
            'uses' => 'RegisterController@register'
        ]);
    });
});

Route::group(['namespace' => 'Frontend'], function() {
    Route::get('/', [
        'as'    => 'frontend.index',
        'uses'  => 'HomeController@Index'
    ]);

    Route::get('contact-us', [
        'as'    => 'frontend.home.contact-us',
        'uses'  => 'HomeController@getContact'
    ]);

    Route::get('event', [
        'as'    => 'frontend.event.index',
        'uses'  => 'EventController@Index'
    ]);

    Route::get('event/{event}', [
        'as'    => 'frontend.event.event',
        'uses'  => 'EventController@getEvent'
    ]);

    Route::get('event/{event}/koi/{koi}', [
        'as'    => 'frontend.event.koi',
        'uses'  => 'EventController@getKoi'
    ]);

    Route::get('event/winner', [
        'as'    => 'frontend.event.winner',
        'uses'  => 'EventController@getWinner'
    ]);

    Route::get('partner', [
        'as'    => 'frontend.partner.index',
        'uses'  => 'PartnerController@Index'
    ]);

    Route::get('partner/{partner}', [
        'as'    => 'frontend.partner.detail',
        'uses'  => 'PartnerController@getDetail'
    ]);
});