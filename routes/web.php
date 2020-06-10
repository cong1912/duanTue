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
    Route::post('/contact', 'ContactsController@store')->name('contact.store');
    Route::get('/contact/{id}/edit', 'ContactsController@edit')->name('contact.edit');
    Route::put('/contact/{id}', 'ContactsController@update')->name('contact.update');
    Route::delete('/contact/{id}/delete', 'ContactsController@destroy')->name('contact.destroy');
    Route::get('analytics', function () {
        return view('back-end.pages.analytics.index');
    })->name('analytics');
});




Route::get('/',function(){
	return view('front-end.home');
});

Route::get('/lienhe',function(){
	return view('front-end.contact');
});

Route::get('/khoahoc','HomeController@course');

Route::get('/gioithieu',function(){
	return view('front-end.introduce');
});

Route::get('/tintuc',function(){
	return view('front-end.new');
});

Route::get('/tuyendung',function(){
	return view('front-end.recruitment');
});

Route::get('/tracuu',function(){
	return view('front-end.search');
});

