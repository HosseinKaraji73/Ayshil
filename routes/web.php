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


Route::get('/clear', function () {
    $cache1 = Artisan::call('cache:clear');
    $cache2 = Artisan::call('config:cache');
    return "<a href='/'>Click Me</a>";
});

Route::get('/', 'FrontEnd\HomeController@index');

Route::get('cart', 'FrontEnd\OrderController@index')->name('cart.index');
Route::post('cart', 'FrontEnd\OrderController@store')->name('cart.store');

Route::get('events', 'FrontEnd\EventsController@index');
Route::get('events-details/{id}', 'FrontEnd\EventsController@show');

Route::get('products', 'FrontEnd\ProductController@index');
Route::get('products/menu/{id}/{name}', 'FrontEnd\ProductController@MenuShow');
Route::get('products/menu/{menuProducts_id}/{id}/{name}', 'FrontEnd\ProductController@subMenuShow');
Route::get('products/menu/{subMenuProducts_id}/{id}/{name}', 'FrontEnd\ProductController@subSubMenuShow');
Route::get('products/menu/{subMenuProducts_id}/{subSubMenuProducts_id}/{id}/{title}', 'FrontEnd\ProductController@show');


Route::get('activate-carbon', 'FrontEnd\ActiveCarbonController@index');
Route::get('activate-carbon/{id}/{title}-{title_en}', 'FrontEnd\ActiveCarbonController@show');

Route::get('videos', 'FrontEnd\VideoController@index');

Route::get('events', 'FrontEnd\EventController@index');
Route::get('events/{id}/{title}', 'FrontEnd\EventController@show');

Route::get('about-us', 'FrontEnd\AboutController@index');
Route::get('call-us', 'FrontEnd\ContactController@index');

Route::get('request','FrontEnd\PaymentController@payment');
Route::any('callback/from/bank','FrontEnd\PaymentController@callbackPayment');

Auth::routes();
Route::get('reset-password', 'Auth\ResetPasswordController@showResetForm');
Route::post('reset-password', 'Auth\ResetPasswordController@resetPassword')->name('resetPassword');
Route::post('cart/submit', 'FrontEnd\OrderController@addAfter');
Route::post('insert/orders', 'FrontEnd\OrderController@addBefore');





Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'panel'], function () {

        Route::group(['middleware' => 'Admin', 'prefix' => 'admin'], function () {

            Route::get('profile', 'BackEnd\Admin\UserController@ShowProfileForm');
            Route::get('profile/{user}/edit', 'BackEnd\Admin\UserController@edit')->name('admin.edit');
            Route::PATCH('edit/profile/{user}', 'BackEnd\Admin\UserController@update');
            Route::get('change/password/form', 'BackEnd\Admin\UserController@changePasswordForm');
            Route::PATCH('user/{id}/change/password', 'BackEnd\Admin\UserController@changePassword');
            Route::resource('events', 'BackEnd\Admin\EventsController');
            Route::resource('videos', 'BackEnd\Admin\VideoController');
            Route::resource('abouts', 'BackEnd\Admin\AboutController');
            Route::resource('contact', 'BackEnd\Admin\ContactController');

            Route::get('form', 'BackEnd\Admin\ContactController@listform');
            Route::get('form/{id}', 'BackEnd\Admin\ContactController@showform');

            Route::get('setting', 'BackEnd\Admin\SettingController@index');
            Route::PATCH('settting/{id}', 'BackEnd\Admin\SettingController@update');

            Route::get('footer', 'BackEnd\Admin\FooterController@index');
            Route::PATCH('footer/{id}', 'BackEnd\Admin\FooterController@update');

            Route::get('customer', 'BackEnd\Admin\UserController@indexCostomer');

            Route::resource('slider', 'BackEnd\Admin\SliderController');
            Route::resource('product', 'BackEnd\Admin\ProductController');
            Route::resource('menu-product', 'BackEnd\Admin\MenuProductController');
            Route::resource('sub-menu-product', 'BackEnd\Admin\SubMenuProductController');
            Route::resource('sub-sub-menu-product', 'BackEnd\Admin\SubSubMenuProductController');
            Route::get('available/product/{product}', 'BackEnd\Admin\ProductController@toggleAvailable');
            Route::resource('order', 'BackEnd\Admin\OrderController');
            Route::resource('customers', 'BackEnd\Admin\CustomersController');

            Route::resource('color', 'BackEnd\Admin\ColorController');
            Route::resource('size', 'BackEnd\Admin\SizeController');
            Route::get('editColorSize/{id}', 'BackEnd\Admin\ProductController@editColorSize');
            Route::post('editColorSize', 'BackEnd\Admin\ProductController@updateColorSize');

            Route::get('editColorSizeMany/{id}', 'BackEnd\Admin\ProductController@editColorSizeMany');
            Route::post('editColorSizeMany', 'BackEnd\Admin\ProductController@updateColorSizeMany');

            Route::resource('states', 'BackEnd\Admin\StateController');

        });

        Route::group(['middleware' => 'Owner', 'prefix' => 'owner'], function () {

        });

        Route::group(['prefix' => 'user'], function () {

            Route::get('profile', 'BackEnd\User\UserController@index');
            Route::get('panel/user/profile','BackEnd\User\UserController@changePasswordForm');
            Route::PATCH('user/{id}/change/password','BackEnd\User\UserController@changePassword');
            Route::get('profile/{user}/edit', 'BackEnd\User\UserController@edit')->name('user.edit');
            Route::resource('orders', 'BackEnd\User\OrderController');
//            Route::get('unused/discount/code','BackEnd\User\DiscountController@showUnusedDiscountCode');
            Route::get('comment','FrontEnd\CommentController@store');

            Route::PATCH('edit/profile/{user}','BackEnd\User\UserController@update');
//            Route::get('user/credit','BackEnd\User\CreditController@index');
//            Route::post('user/{id}/credit/increase','BackEnd\User\CreditController@increaseCredit');
//            Route::get('/cancel/orders','BackEnd\User\OrderController@indexCancel');
//            Route::resource('/competition', 'BackEnd\User\CompetitionController');
//            Route::get('rate/order/{payment}/form', 'BackEnd\User\OrderController@showRateForm');
//            Route::post('store/rate/{payment}', 'BackEnd\User\OrderController@rateOrderUser');
//            Route::get('order/{payment}/cancel', 'BackEnd\User\OrderController@cancel');
            Route::post('product/rate/save', 'BackEnd\User\OrderController@productRate');
        });
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
