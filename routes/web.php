<?php
Route::get('/', function () {
    return view('admin.index');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function ($router) {
    $router->group(['prefix' => 'navbar', 'as' => 'navbar.'], function ($route) {
        $route->get('index', ['as' => 'index', 'uses' => 'NavbarController@index']);
        $route->get('data-table', ['as' => 'data-table', 'uses' => 'NavbarController@dataTable']);
        $route->get('is_parent', ['as' => 'is_parent', 'uses' => 'NavbarController@is_parent']);
        $route->get('createOrUpdate', ['as' => 'createOrUpdate', 'uses' => 'NavbarController@createOrUpdate']);
    });
});
