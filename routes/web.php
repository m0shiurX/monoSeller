<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');

    // Customer
    Route::delete('customers/destroy', 'CustomerController@massDestroy')->name('customers.massDestroy');
    Route::resource('customers', 'CustomerController');

    // Order
    Route::delete('orders/destroy', 'OrderController@massDestroy')->name('orders.massDestroy');
    Route::resource('orders', 'OrderController');

    // Business Info
    Route::delete('business-infos/destroy', 'BusinessInfoController@massDestroy')->name('business-infos.massDestroy');
    Route::resource('business-infos', 'BusinessInfoController');

    // Store Settings
    Route::delete('store-settings/destroy', 'StoreSettingsController@massDestroy')->name('store-settings.massDestroy');
    Route::resource('store-settings', 'StoreSettingsController');

    // Sales Page
    Route::delete('sales-pages/destroy', 'SalesPageController@massDestroy')->name('sales-pages.massDestroy');
    Route::resource('sales-pages', 'SalesPageController');

    // Policy And Tos
    Route::post('policy-and-tos/media', 'PolicyAndTosController@storeMedia')->name('policy-and-tos.storeMedia');
    Route::post('policy-and-tos/ckmedia', 'PolicyAndTosController@storeCKEditorImages')->name('policy-and-tos.storeCKEditorImages');
    Route::resource('policy-and-tos', 'PolicyAndTosController', ['except' => ['destroy']]);

    // Tracking
    Route::resource('trackings', 'TrackingController', ['except' => ['destroy']]);

    // Coupon
    Route::delete('coupons/destroy', 'CouponController@massDestroy')->name('coupons.massDestroy');
    Route::resource('coupons', 'CouponController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
