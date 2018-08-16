<?php

Route::get('/', function () {
    return view('welcome');
});

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

        Route::get('/', function (){
            return view('shops.index');
        })->name('shops');

        Route::get('/sub/type/{id}/{type}', function ($id, $type){
            return view('shops.subindex', compact('id','type'));
        })->name('shops.sub');

        Route::get('/cart', function (){
            return view('shops.cartindex');
        })->name('shops.cart');

        Route::get('/buy', function (){
            return view('shops.buyindex');
        })->name('shops.buy');

    });

//Lessons
    Route::group(['prefix' => 'lessons'],function (){

        Route::get('/', function (){
            return view('lessons.index');
        })->name('lessons');

        Route::get('/sub/{id}', function ($id){
            return view('lessons.subindex', compact('id'));
        })->name('lessons.sub');

    });

//news
    Route::group(['prefix' => 'news'],function (){
        Route::get('/', function (){
            return view('news.index');
        })->name('news');

        Route::get('/sub/{id}', function ($id){
            return view('news.subindex', compact('id'));
        })->name('news.sub');
    });

//articles

    Route::group(['prefix' => 'articles'], function (){

        Route::get('/', function (){
            return view('articles.index');
        })->name('articles');

        Route::get('/sub/{id}',function ($id){
            return view('articles.subindex', compact('id'));
        })->name('articles.sub');

    });

//abouts
    Route::get('/abouts', function (){
        return view('abouts.index');
    })->name('abouts');

    Route::get('/contact', function (){
        return view('abouts.contact');
    })->name('abouts.contact');

    Route::get('/termsconditions ', function (){
        return view('abouts.termsconditions');
    })->name('abouts.termsconditions');

    Route::get('/acknowledgement ', function (){
        return view('abouts.acknowledgement');
    })->name('abouts.acknowledgement');

    Route::get('/location ', function (){
        return view('abouts.address');
    })->name('abouts.address');

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