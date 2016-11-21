<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// トップページ
Route::get('/', 'IndexController@index');

// メニューページ
Route::get('/menu','MenusController@index');

// カートページ
Route::get('/cart','CartsController@index')->name('cart');
Route::post('/cart/store','CartsController@store');
Route::post('/cart/clear/{id}','CartsController@pop');
Route::post('/cart/edit/','CartsController@edit');
Route::post('/cart/clear','CartsController@clear');

// etc..
Route::get('/company', 'PagesController@company');
Route::get('/privacypolicy', 'PagesController@privacypolicy');
Route::get('/agreement', 'PagesController@agreement');
Route::get('/faq', 'PagesController@faq');

//マイページ
Route::get('/mypage/order/history','MypagesController@orderHistory');
Route::get('/mypage/order/detail/{id}','MypagesController@orderDetail');
Route::get('/mypage/detail','MypagesController@detail');
Route::get('/mypage/edit','MypagesController@edit');
Route::get('/mypage/confirm','MypagesController@confirm');


// コンタクト
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@post');


// API
Route::get('/app/countCartContents','ApisController@countCartContents');

//お客様用ログアウト
Route::post('/logout','Auth\LoginController@logout');



// --------------------------- 管理者用 ---------------------------------------


//管理者用ページ
Route::get('/pizzzzza/employee', 'EmployeesController@index'); //従業員一覧
Route::get('/pizzzzza/employee/edit', 'EmployeesController@edit'); //従業員編集
Route::get('/pizzzzza/employee/add', 'EmployeesController@add'); //従業員追加

Route::get('/pizzzzza/menu', 'AdminMenusController@index'); //従業員用メニュー一覧
Route::get('/pizzzzza/menu/edit', 'AdminMenusController@edit'); //従業員用メニュー編集
Route::get('/pizzzzza/menu/add', 'AdminMenusController@add'); //従業員用メニュー追加

Route::get('/pizzzzza/analysis','AnalysisController@index'); //売り上げ・売れ筋ページ

Route::get('/pizzzzza/coupon/add','CouponsController@couponNew'); //クーポン種別選択ページ
Route::get('/pizzzzza/coupon/add/discount/input','CouponsController@couponNewDiscount'); //クーポン値引き入力ページ
Route::get('/pizzzzza/coupon/add/gift/input','CouponsController@couponNewGiftInput'); //プレゼントクーポン条件入力ページ
Route::get('/pizzzzza/coupon/add/gift/select','CouponsController@couponNewGiftSelect'); //プレゼントクーポン商品選択ページ(未完成)
Route::get('/pizzzzza/coupon/list','CouponsController@couponNowList'); //クーポンメニュー
Route::get('/pizzzzza/coupon/list/discount/edit','CouponsController@couponNowDiscountEdit'); //値引きクーポン編集ページ　
Route::get('/pizzzzza/coupon/list/gift/edit','CouponsController@couponNowGiftEdit'); //プレゼントクーポン条件変更ページ
Route::get('/pizzzzza/coupon/history','CouponsController@couponHistory'); //過去のクーポン一覧ページ(未完成)


//auth
Auth::routes();

Route::get('/pizzzzza/login', 'auth\AdminLoginController@form'); //管理画面ログインページ
Route::post('/pizzzzza/order/top', 'auth\AdminLoginController@login'); //管理画面トップ
