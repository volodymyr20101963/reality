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

Route::get('/','IndexController@index')->name('index');

Route::get('/offers','OfferController@index')->name('offers');
Route::get('/offers/add','OfferController@add')->name('offers-add')->middleware('auth');
Route::post('/offers/add/submit','OfferController@addSubmit')->name('offers-add-submit')->middleware('auth');
Route::get('/offers/edit/{offer}','OfferController@edit')->name('offers-edit')->middleware(['auth','checkUser']);
Route::post('/offers/edit/submit/{offer}','OfferController@editSubmit')->name('offers-edit-submit')->middleware(['auth','checkUser']);
Route::get('/offers/delete/{offer}','OfferController@delete')->name('offers-delete')->middleware(['auth','checkUser']);
Route::get('/offers/view/{offer}','OfferController@view')->name('offers-view');
Route::get('/offers/edit/{offer}/{imageOffer}','OfferController@deleteImage')->name('offers-edit-image')->middleware(['auth','checkUser']);
Route::get('/offers/search','OfferController@search')->name('offers-search');


Route::get('/article','ArticleController@index')->name('article');
Route::get('/article/add','ArticleController@add')->name('article-add')->middleware('auth');
Route::post('/article/add/submit','ArticleController@addSubmit')->name('article-add-submit')->middleware('auth');
Route::get('/article/edit/{article}','ArticleController@edit')->name('article-edit')->middleware(['auth','checkUserArticle']);
Route::post('/article/edit/submit/{article}','ArticleController@editSubmit')->name('article-edit-submit')->middleware(['auth','checkUserArticle']);
Route::get('/article/delete/{article}','ArticleController@delete')->name('article-delete')->middleware(['auth','checkUserArticle']);
Route::get('/article/edit/{article}/{imageArticle}','ArticleController@deleteImage')->name('article-edit-image')->middleware(['auth','checkUserArticle']);
Route::get('/article/search','ArticleController@search')->name('article-search');

Route::get('/cabinet','CabinetController@index')->name('cabinet')->middleware('auth');

Route::get('/about','AboutController@index')->name('about');

Route::get('/admin/offers','Admin\OfferController@index')->name('admin-offers')->middleware(['auth','checkAdmin']);
Route::get('/admin/offers/edit/{offer}','Admin\OfferController@edit')->name('admin-offers-edit')->middleware(['auth','checkAdmin']);
Route::post('/admin/offers/edit/submit/{offer}','Admin\OfferController@editSubmit')->name('admin-offers-edit-submit')->middleware(['auth','checkAdmin']);
Route::get('/admin/offers/delete/{offer}','Admin\OfferController@delete')->name('admin-offers-delete')->middleware(['auth','checkAdmin']);
Route::get('/admin/offers/edit/{offer}/{imageOffer}','Admin\OfferController@deleteImage')->name('admin-offers-edit-image')->middleware(['auth','checkAdmin']);

Route::get('/admin/articles','Admin\ArticleController@index')->name('admin-articles')->middleware(['auth','checkAdmin']);
Route::get('/admin/articles/edit/{article}','Admin\ArticleController@edit')->name('admin-articles-edit')->middleware(['auth','checkAdmin']);
Route::post('/admin/articles/edit/submit/{article}','Admin\ArticleController@editSubmit')->name('admin-articles-edit-submit')->middleware(['auth','checkAdmin']);
Route::get('/admin/articles/delete/{article}','Admin\ArticleController@delete')->name('admin-articles-delete')->middleware(['auth','checkAdmin']);
Route::get('/admin/articles/edit/{article}/{imageArticle}','Admin\ArticleController@deleteImage')->name('admin-articles-edit-image')->middleware(['auth','checkAdmin']);

Route::get('/admin/users','Admin\UserController@index')->name('admin-users')->middleware(['auth','checkAdmin']);
Route::get('/admin/users/delete/{user}','Admin\UserController@delete')->name('admin-users-delete')->middleware(['auth','checkAdmin']);

Auth::routes();
