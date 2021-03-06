<?php

Route::group(['namespace' =>'Frontend'],function($route){
    $route->get('/','HomeController@index')->name('home');
});
Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function ($router) {
    $router->group(['prefix' => 'navbar', 'as' => 'navbar.'], function ($route) {
        $route->get('index', ['as' => 'index', 'uses' => 'NavbarController@index']);
        $route->get('data-table', ['as' => 'data-table', 'uses' => 'NavbarController@dataTable']);
        $route->get('is_parent', ['as' => 'is_parent', 'uses' => 'NavbarController@is_parent']);
        $route->delete('navbar', ['as' => 'delete', 'uses' => 'NavbarController@delete']);
        $route->get('detail', ['as' => 'detail', 'uses' => 'NavbarController@detail']);
        $route->match(['POST', 'PATCH'], 'create-update',
            ['as' => 'createOrUpdate', 'uses' => 'NavbarController@createOrUpdate']);
    });

    $router->group(['prefix' => 'blog', 'as' => 'blog.'], function ($route) {
        $route->get('index', ['as' => 'index', 'uses' => 'BlogController@index']);
        $route->get('create', ['as' => 'create', 'uses' => 'BlogController@create']);
    });
});
