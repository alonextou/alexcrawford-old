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

Route::group(['before' => 'auth'], function(){
	Route::group(['prefix' => 'admin'], function()
	{
		Route::get('articles', ['as' => 'admin_articles', 'uses' => 'AdminArticleController@getIndex']);
		Route::get('articles/create', ['as' => 'create_article', 'uses' => 'AdminArticleController@getCreate']);
		Route::get('articles/{alias}', ['as' => 'edit_article', 'uses' => 'AdminArticleController@getUpdate']);
		Route::get('/', ['as' => 'admin', function()
		{
			return View::make('admin/index');
		}]);
		Route::group(['before' => 'csrf'], function(){
			Route::post('articles/create', ['uses' => 'AdminArticleController@postCreate']);
		});
	});
});

Route::group(['before' => 'guest'], function(){
	Route::get('login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);

	Route::group(['before' => 'csrf'], function(){
		Route::post('login', ['uses' => 'AuthController@postLogin']);
	});
});

Route::group(['prefix' => 'blog'], function()
{	
	Route::get('/', ['as' => 'blog', 'uses' => 'BlogController@getIndex']);
	Route::get('/{alias}', ['as' => 'blog_post', 'uses' => 'BlogController@getPost']);
});

Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);