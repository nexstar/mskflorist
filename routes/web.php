<?php

Route::get('/', [
    'as' => 'index',
    'uses' => 'IndexController@index'
]);

Route::get('/forgetpwd', 'UsersController@password_no_login')->name('password_no_login');

//Users
    Route::group( ['middleware' => 'checklogin', 'prefix' => 'users'], function (){

        Route::resource('/', 'UsersController')->names([
            'index' => 'users.index', 'store' => 'users.store', 'create' => 'users.create',
            'show' => 'users.show', 'update' => 'users.update', 'destroy' => 'users.destroy',
            'edit' => 'users.edit'
        ]);

        Route::get('/password', 'UsersController@password_manager')->name('users.password_manager');

        Route::get('/fb_login', 'UsersController@fb_login')->name('users.fb_login');

        Route::get('/account', 'UsersController@account_manager_index')->name('users.account_manager_index');

        Route::get('/sms', 'UsersController@sms_manager_index')->name('users.sms_manager_index');

        Route::get('/address_book','UsersController@address_book_index')->name('users.address_book_index');

        Route::get('/bonus', 'UsersController@bonus')->name('users.bonus_index');

        Route::get('/bonus/detail/{id}', 'UsersController@bonus_detail')->name('users.bonus_detail');

        Route::get('/vat', 'UsersController@vat_index')->name('users.vat_index');

        Route::get('/transaction', 'UsersController@transaction_list')->name('users.transaction_index');

        Route::get('/transaction/detail/{id}', 'UsersController@transaction_detail')->name('users.transaction_detail');

        Route::get('/transaction/invoice/{id}', 'UsersController@transaction_invoice')->name('users.transaction_invoice');

        Route::get('/buy', 'UsersController@buy_list')->name('users.buy_list_index');

    });

    //Shops
    Route::group(['prefix' => 'shops'],function(){

        Route::get('/itemclassify/{id}/{type}',[
            'as' => 'shops.itemclassify',
            'uses' => 'ShopsController@itemclassify'
        ]);

        Route::get('/subviewlefttool', [
            'as' => 'shops.subviewlefttool',
            'uses' => 'ShopsController@subviewlefttool'
        ]);

        Route::get('/', [
            'as' => 'shops.index',
            'uses' => 'ShopsController@index'
        ]);

        Route::get('/highttolow', [
            'as' => 'shops.highttolow',
            'uses' => 'ShopsController@highttolow'
        ]);

        Route::get('/lowtohight', [
            'as' => 'shops.lowtohight',
            'uses' => 'ShopsController@lowtohight'
        ]);

        Route::get('/hotstatus', [
            'as' => 'shops.hotstatus',
            'uses' => 'ShopsController@hotstatus'
        ]);



        Route::get('/sub/type/{id}/{type}', [
            'as' => 'shops.subindex',
            'uses' => 'ShopsController@subindex'
        ]);

        Route::get('/cart', [
            'as' => 'shops.cart',
            'uses' => 'ShopsController@cart'
        ]);

        Route::get('/buy', [
            'as' => 'shops.buy',
            'uses' => 'ShopsController@buy'
        ]);

    });

//Lessons
    Route::group(['prefix' => 'lessons'],function (){

        Route::get('/', [
            'as' => 'lessons_course.index',
            'uses' => 'CourseController@index'
        ]);

        Route::get('/sub/{id}', [
            'as' => 'lessons_course.subindex',
            'uses' => 'CourseController@subindex'
        ]);

        Route::get('/period/{type}',[
            'as' => 'lessons_course.period',
            'uses' => 'CourseController@period',
        ]);

        Route::get('/history/{type}',[
            'as' => 'lessons_course.history',
            'uses' => 'CourseController@history',
        ]);
    });

//news
    Route::group(['prefix' => 'news'],function (){

        Route::get('/', [
            'as' => 'news.index',
            'uses' => 'NewsController@index'
        ]);

        Route::get('/sub/{id}', [
            'as' => 'news.subindex',
            'uses' => 'NewsController@subindex'
        ]);

    });

//articles

    Route::group(['prefix' => 'articles'], function (){

        Route::get('/assign/{id}', [
            'as' => 'articles.assign',
            'uses' => 'ArticleContorller@assign'
        ]);

        Route::get('/', [
            'as' => 'articles.index',
            'uses' => 'ArticleContorller@index'
        ]);

        Route::get('/sub/{id}',[
            'as' => 'articles.subindex',
            'uses' => 'ArticleContorller@subindex'
        ]);

    });

//abouts
    Route::get('/abouts', [
        'as' => 'about.abouts',
        'uses' => 'AboutController@abouts'
    ]);

    Route::get('/contact', [
        'as' => 'about.contact',
        'uses' => 'AboutController@contact'
    ]);

    Route::get('/termsconditions ', [
        'as' => 'about.termsconditions',
        'uses' => 'AboutController@termsconditions'
    ]);

    Route::get('/acknowledgement ', [
        'as' => 'about.acknowledgement',
        'uses' => 'AboutController@acknowledgement'
    ]);

    Route::get('/location ', [
        'as' => 'about.location',
        'uses' => 'AboutController@location'
    ]);

//Error Page
    Route::get('/404 ', function (){
        return view('errors.404');
    })->name('errors.404');

    Route::get('/403 ', function (){
        return view('errors.403');
    })->name('errors.403');

    Route::get('/443 ', function (){
        return view('errors.443');
    })->name('errors.443');

    Route::get('/500 ', function (){
        return view('errors.500');
    })->name('errors.500');

    Route::get('/503 ', function (){
        return view('errors.503');
    })->name('errors.503');