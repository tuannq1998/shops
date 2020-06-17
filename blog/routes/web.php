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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['namespace' => 'Auth', 'prefix' => 'account'], function () {
    Route::get('dang-ky', 'RegisterController@getFormRegister')->name('get.register');
    Route::post('dang-ky', 'RegisterController@postFormRegister');

    Route::get('dang-nhap', 'LoginController@getFormLogin')->name('get.login');
    Route::post('dang-nhap', 'LoginController@postFormLogin');

    Route::get('dang-xuat', 'LoginController@getLogout')->name('get.Logout');
});

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('', 'HomeController@index')->name('get.home');
    Route::get('danh-muc/{slug}-{id}', 'CategoryController@listProduct')->name('frontend.list.product');
    Route::get('san-pham/{slug}-{id}', 'ProductDetailController@ProductDetail')->name('frontend.product.detail');

    Route::prefix('shopping')->group(function () {
        Route::get('/add/{id}', 'ShoppingCartController@addProduct')->name('add.shopping.cart');
        Route::get('/delete/{id}', 'ShoppingCartController@deleteProduct')->name('delete.shopping.cart');
        Route::get('/danh-sach', 'ShoppingCartController@listShoppingCart')->name('list.shopping.cart');
    });

    Route::group(['prefix' => 'gio-hang', 'middleware' => 'CheckLoginUser'], function () {
        Route::get('/thanh-toan', 'ShoppingCartController@formPay')->name('form.pay');
        Route::post('/thanh-toan', 'ShoppingCartController@saveInfoShoppingCart');
    });

    Route::get('lien-he', 'ContactController@getContact')->name('get.contact');
    Route::post('lien-he', 'ContactController@saveContact');
});

include 'route_admin.php';

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
