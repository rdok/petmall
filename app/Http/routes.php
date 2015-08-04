<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/', ['as' => 'home', 'uses' => 'e_shop\HomeController@home']);
get('stores', ['as' => 'stores', 'uses' => 'e_shop\HomeController@stores']);
get('helpful_tips', ['as' => 'helpful_tips', 'uses' => 'e_shop\HomeController@helpfulTips']);
get('blog', ['as' => 'blog', 'uses' => 'e_shop\HomeController@blog']);
get('contact', ['as' => 'contact', 'uses' => 'e_shop\HomeController@contact']);

get('auth', ['as' => 'auth', 'uses' => 'e_shop\SessionsController@auth']);
