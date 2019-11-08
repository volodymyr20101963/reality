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
Route::get('/offers/search/','OfferController@search')->name('offers-search');


Route::get('/article','ArticleController@index')->name('article');
Route::get('/article/add','ArticleController@add')->name('article-add')->middleware('auth');
Route::post('/article/add/submit','ArticleController@addSubmit')->name('article-add-submit')->middleware('auth');
Route::get('/article/edit/{article}','ArticleController@edit')->name('article-edit')->middleware(['auth','checkUserArticle']);
Route::post('/article/edit/submit/{article}','ArticleController@editSubmit')->name('article-edit-submit')->middleware(['auth','checkUserArticle']);
Route::get('/article/delete/{article}','ArticleController@delete')->name('article-delete')->middleware(['auth','checkUserArticle']);

Route::get('/cabinet','CabinetController@index')->name('cabinet')->middleware('auth');

Route::get('/about','AboutController@index')->name('about');

Auth::routes();
