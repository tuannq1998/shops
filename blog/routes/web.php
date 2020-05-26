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
Route::group(['namespace' => 'Frontend'], function (){
    Route::get('','HomeController@index')->name('get.home');
    Route::get('danh-muc/{slug}-{id}','CategoryController@listProduct')->name('frontend.list.product');
    Route::get('san-pham/{slug}-{id}','ProductDetailController@ProductDetail')->name('frontend.product.detail');
    Route::prefix('shopping')->group(function (){
       Route::get('/add/{id}','ShoppingCartController@addProduct')->name('add.shopping.cart');
    });
});
include 'route_admin.php';
