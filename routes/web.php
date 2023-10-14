<?php

// Route::redirect('/login', '/login');

Route::get('/', function () {
    return redirect('/login');
    $this->middleware('auth');
});

Route::get('/', 'Auth\MainController@index')->name('main');

Route::post('/register', 'Auth\UserRegisterController@index');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::redirect('/home', '/admin');

// Route::get('/', 'Auth\MainController@index')->name('main');

Route::middleware(['guest'])->group(function () {    
    Auth::routes(['register' => false]);

    // Route::get('/main', 'Auth\MainController@index')->name('main');


    Route::get('/about', 'Auth\MainController@about')->name('about');

    Route::get('/speaker', 'Auth\MainController@speaker')->name('speaker');

    Route::get('/contact', 'Auth\MainController@contact')->name('contact');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');

    Route::delete('banner/destroy', 'BannerController@massDestroy')->name('banner.massDestroy');

    Route::resource('banner', 'BannerController');

    Route::delete('about/destroy', 'AboutController@massDestroy')->name('about.massDestroy');

    Route::resource('about', 'AboutController');

    Route::delete('speaker/destroy', 'SpeakerController@massDestroy')->name('speaker.massDestroy');

    Route::resource('speaker', 'SpeakerController');
});
