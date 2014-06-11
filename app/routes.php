<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as'=>'home', 'uses'=>'HomeController@index'));
Route::get('registration', array('as'=>'registration', 'uses'=>'HomeController@registration') );
Route::post('registration', array('uses'=>'HomeController@postRegistration') );
Route::post('login', array('uses'=>'HomeController@postLogin') );
Route::get('logout', array('uses'=>'HomeController@logout'));
Route::post('addcategory', array('uses'=>'HomeController@addCategory'));
Route::get('category/{id}', array('as'=>'category', 'uses'=>'HomeController@categoryShow'));
Route::post('addgoods', array('uses'=>'HomeController@postGoods'));
Route::get('goods/{id}', array('as'=>'goods', 'uses'=>'HomeController@goodsShow'));
Route::post('updategoods/{id}', array('uses'=>'HomeController@goodsUpdate'));
Route::post('addToCard', array('uses'=>'HomeController@addToCard'));
Route::get('cart', array('as'=>'cart', 'uses'=>'HomeController@showCart'));
Route::get('orders', array('as'=>'orders', 'uses'=>'HomeController@showOrders'));
Route::post('delete_from_cart', array('uses'=>'HomeController@deleteFromCart'));
Route::post('delete_goods', array('uses'=>'HomeController@deleteGoods'));
Route::post('add_order', array('uses'=>'HomeController@addOrder'));
Route::get('order/{id}', array('as'=>'order', 'uses'=>'HomeController@showOrder'));
Route::post('save_status', array('uses'=>'HomeController@saveStatus'));
Route::post('add_news', array('uses'=>'HomeController@addNews'));
Route::get('news', array('as'=>'news','uses'=>'HomeController@showNews'));
Route::get('news-post/{id}', array('as'=>'newsOne', 'uses'=>'HomeController@oneNews'));
Route::post('edit_news/{id}', array('uses'=>'HomeController@editNews'));