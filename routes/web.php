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


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
    Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
    Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
    Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
    Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
    Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
    Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
    //course
    Route::get('/courses/index', 'CoursesController@index')->name('courses.index');
    Route::get('/courses/create', 'CoursesController@create')->name('courses.create');
    Route::post('/courses', 'CoursesController@store')->name('courses.store');
    Route::get('/courses/{id}/edit', 'CoursesController@edit')->name('courses.edit');
    Route::put('/courses/{id}', 'CoursesController@update')->name('courses.update');
    Route::delete('/courses/{id}/delete', 'CoursesController@destroy')->name('courses.destroy');
    //Introduces
    Route::get('/introduces/index', 'IntroducesController@index')->name('introduces.index');
    Route::get('/introduces/create', 'IntroducesController@create')->name('introduces.create');
    Route::post('/introduces', 'IntroducesController@store')->name('introduces.store');
    Route::get('/introduces/{id}/edit', 'IntroducesController@edit')->name('introduces.edit');
    Route::put('/introduces/{id}', 'IntroducesController@update')->name('introduces.update');
    Route::delete('/introduces/{id}/delete', 'IntroducesController@destroy')->name('introduces.destroy');
    //Softwares
    Route::get('/software/index', 'SoftwaresController@index')->name('software.index');
    Route::get('/software/create', 'SoftwaresController@create')->name('software.create');
    Route::post('/software', 'SoftwaresController@store')->name('software.store');
    Route::get('/software/{id}/edit', 'SoftwaresController@edit')->name('software.edit');
    Route::put('/software/{id}', 'SoftwaresController@update')->name('software.update');
    Route::delete('/software/{id}/delete', 'SoftwaresController@destroy')->name('software.destroy');
    //news
    Route::get('news/index', 'NewsController@index')->name('news.index');
    Route::get('/news/create', 'NewsController@create')->name('news.create');
    Route::post('/news', 'NewsController@store')->name('news.store');
    Route::get('/news/{id}/edit', 'NewsController@edit')->name('news.edit');
    Route::put('/news/{id}', 'NewsController@update')->name('news.update');
    Route::delete('/news/{id}/delete', 'NewsController@destroy')->name('news.destroy');
    //keywords
    Route::get('keywords/index', 'KeywordsController@index')->name('keywords.index');
    Route::get('/keywords/create', 'KeywordsController@create')->name('keywords.create');
    Route::post('/keywords', 'KeywordsController@store')->name('keywords.store');
    Route::get('/keywords/{id}/edit', 'KeywordsController@edit')->name('keywords.edit');
    Route::put('/keywords/{id}', 'KeywordsController@update')->name('keywords.update');
    Route::delete('/keywords/{id}/delete', 'KeywordsController@destroy')->name('keywords.destroy');
//contact
    Route::get('contact/index', 'ContactsController@index')->name('contact.index');
//Route::get('/contact/create', 'ContactsController@create')->name('contact.create');

    Route::get('/contact/{id}/edit', 'ContactsController@edit')->name('contact.edit');
    Route::put('/contact/{id}', 'ContactsController@update')->name('contact.update');
    Route::delete('/contact/{id}/delete', 'ContactsController@destroy')->name('contact.destroy');
    //analytics
    Route::get('analytics', function () {return view('back-end.pages.analytics.index');})->name('analytics');
    //keywords
    Route::get('search/index', 'SearchsController@index')->name('Search.index');
    Route::get('/search/create', 'SearchsController@create')->name('Search.create');
    Route::post('/search', 'SearchsController@store')->name('Search.store');
    Route::get('/search/{id}/edit', 'SearchsController@edit')->name('Search.edit');
    Route::put('/search/{id}', 'SearchsController@update')->name('Search.update');
    Route::delete('/search/{id}/delete', 'SearchsController@destroy')->name('Search.destroy');
});


Route::post('/contact', 'ContactsController@store')->name('contact.store');

Route::get('/',['uses'=>'PageHomeController@index','as'=>'trangchu']);
Route::get('khoahoc/{slug}',['uses'=>'PageHomeController@course','as'=>'khoahoc']);

Route::get('phanmem/{slug}',['uses'=>'PageHomeController@software','as'=>'phanmem']);

Route::get('gioithieu',['uses'=>'PageHomeController@introduce','as'=>'gioithieu']);

Route::get('lienhe',['uses'=>'PageHomeController@contact','as'=>'lienhe']);

Route::get('tintuc',['uses'=>'PageHomeController@new','as'=>'tintuc']);

Route::get('tracuu/{slug}',['uses'=>'PageHomeController@search','as'=>'tracuu']);

Route::get('tuyendung',['uses'=>'PageHomeController@tuyendung','as'=>'tuyendung']);

Route::get('tintuc/{slug}',['uses'=>'PageHomeController@getDetail','as'=>'chitiet-tintuc']);

Route::get('timkiem',['uses'=>'PageHomeController@getSearch','as'=>'timkiem']);


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

