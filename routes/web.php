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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hone', 'HomeController@index')->name('home');

Route::get('login', ['as' => 'getLogin', 'uses' => 'UserController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'UserController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@getLogout']);

Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function() {
	Route::group(['prefix' => 'cate'], function() {
		Route::get('list', ['as' => 'admin.cate.list', 'uses' => 'CateController@getList']);

		Route::get('add', ['as' => 'admin.cate.getAdd', 'uses' => 'CateController@getAdd']);
		Route::post('add', ['as' => 'admin.cate.postAdd', 'uses' => 'CateController@postAdd']);

		Route::get('delete/{id}', ['as' => 'admin.cate.getDelete', 'uses' => 'CateController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.cate.getEdit', 'uses' => 'CateController@getEdit']);
		Route::post('edit/{id}', ['as' => 'admin.cate.postEdit', 'uses' => 'CateController@postEdit']);
	});

	Route::group(['prefix' => 'product'], function() {
		Route::get('list', ['as' => 'admin.product.list', 'uses' => 'ProductController@getList']);

		Route::get('add', ['as' => 'admin.product.getAdd', 'uses' => 'ProductController@getAdd']);
		Route::post('add', ['as' => 'admin.product.postAdd', 'uses' => 'ProductController@postAdd']);

		Route::get('delete/{id}', ['as' => 'admin.product.getDelete', 'uses' => 'ProductController@getDelete']);

		Route::get('edit/{id}', ['as' => 'admin.product.getEdit', 'uses' => 'ProductController@getEdit']);
		Route::post('edit/{id}', ['as' => 'admin.product.postEdit', 'uses' => 'ProductController@postEdit']);

		Route::get('deleteImgDetail/{id}', ['as' => 'admin.product.getDeleteImg', 'uses' => 'ProductController@getDeleteImgDetailByAjax']);
	});

    Route::group(['prefix' => 'user'], function() {
        Route::get('list', ['as' => 'admin.user.list', 'uses' => 'UserController@getList']);

        Route::get('add', ['as' => 'admin.user.getAdd', 'uses' => 'UserController@getAdd']);
        Route::post('add', ['as' => 'admin.user.postAdd', 'uses' => 'UserController@postAdd']);

        Route::get('delete/{id}', ['as' => 'admin.user.getDelete', 'uses' => 'UserController@getDelete']);

        Route::get('edit/{id}', ['as' => 'admin.user.getEdit', 'uses' => 'UserController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.user.postEdit', 'uses' => 'UserController@postEdit']);
    });

    Route::group(['prefix' => 'deal'], function() {
        Route::get('list', ['as' => 'admin.deal.list', 'uses' => 'DealController@getList']);

        Route::post('updateDeal', 'DealController@postUpdate');
        Route::post('updateStatusDeal', 'DealController@postUpdateStatusDeal');

        Route::get('detail/{id}', ['as' =>'admin.deal.detail', 'uses' => 'DealController@getDealDetailById']);
    });
});

Route::group(['prefix' => '/'], function () {
    Route::get('register-account', ['as' => 'register', 'uses' => 'UserController@getRegisterAccountCustomer']);

    Route::post('register-account', ['as' => 'register', 'uses' => 'UserController@postRegister']);

    Route::get('editInfoCustomer/{id}', ['as' => 'getEditInfoCustomer', 'uses' => 'UserController@editInfoCustomer']);

    Route::post('editInfoCustomer/{id}', ['as' => 'postEditInfoCustomer', 'uses' => 'UserController@postEditInfoCustomer']);

    Route::get('home', ['as' => 'home', 'uses' => 'HomeController@getAllProduct']);

    Route::get('productDetail/{id}', ['as' => 'ProductDetail' ,'uses' => 'HomeController@getProductById']);

    Route::get('category/{id}', ['as' => 'category', 'uses' => 'HomeController@getProductByCategory']);

//    Route::get('category/{id}', ['as' => 'ParentCategory', 'uses' => 'HomeController@getProductByParentCategory']);

    Route::post('addProductToCart', 'HomeController@addProductToCart');

    Route::post('deleteProductInCart', 'HomeController@deleteProductInCart');

    Route::post('changeQuantityProductInCart', 'HomeController@changeQuantityProductInCart');

    Route::get('check-out', ['as' => 'getCheckOut', 'uses' => 'HomeController@getCheckOut'])->middleware('customerLogin');

    Route::post('check-out', ['as' => 'postCheckOut', 'uses' => 'HomeController@postCheckOut']);

    Route::get('deal/{user_id}', ['as' => 'allDealOfUser', 'uses' => 'HomeController@getAllDealByUserId']);

    Route::get('deal-detail/{deal_id}', ['as' => 'dealDetail', 'uses' => 'HomeController@getDealDetail']);

    Route::get('search', ['as' => 'search', 'uses' => 'HomeController@postSearch']);

    Route::get('contact', function () {
        return view('user/contact');
    });
    Route::get('categories', function () {
        return view('user/categories');
    });
    Route::get('productPage', function () {
        return view('user/product-page');
    });
    Route::get('cart', ['as' => 'cart', 'uses' => 'HomeController@getCart']);

});
