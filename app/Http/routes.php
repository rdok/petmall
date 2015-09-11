<?php

get('/', ['as' => 'home', 'uses' => 'EShop\HomeController@home']);
get('stores', ['as' => 'stores', 'uses' => 'EShop\HomeController@stores']);
get('helpful_tips', ['as' => 'helpful_tips', 'uses' => 'EShop\HomeController@helpfulTips']);
get('blog', ['as' => 'blog', 'uses' => 'EShop\HomeController@blog']);
get('contact', ['as' => 'contact', 'uses' => 'EShop\HomeController@contact']);

get('lang/{locale}', ['as' => 'lang', 'uses' => 'EShop\SettingsController@lang']);

get('auth', ['as' => 'auth', 'uses' => 'EShop\SessionsController@auth']);
