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
    // Dashboard
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', 'HomeController@index')->name('home');
    });

    // Roles
    Route::group(['prefix' => 'auth'], function () {
        // Permissions
        Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
        Route::resource('permissions', 'PermissionsController');

        // Roles
        Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
        Route::resource('roles', 'RolesController');

        // Users
        Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
        Route::resource('users', 'UsersController');
    });


    // Store
    Route::group(['prefix' => 'store'], function() {
        // Product
        Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
        Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
        Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
        Route::resource('products', 'ProductController');
        // Order
        Route::delete('orders/destroy', 'OrderController@massDestroy')->name('orders.massDestroy');
        Route::resource('orders', 'OrderController');
        // Coupon
        Route::delete('coupons/destroy', 'CouponController@massDestroy')->name('coupons.massDestroy');
        Route::resource('coupons', 'CouponController');
        // Store Settings
        Route::delete('store-settings/destroy', 'StoreSettingsController@massDestroy')->name('store-settings.massDestroy');
        Route::resource('store-settings', 'StoreSettingsController');
    });

    // Pages
    Route::group(['prefix' => 'pages'], function () {
        // Tracking
        Route::delete('trackings/destroy', 'TrackingController@massDestroy')->name('trackings.massDestroy');
        Route::resource('trackings', 'TrackingController');

        // Policy And Tos
        Route::post('policy-and-tos/media', 'PolicyAndTosController@storeMedia')->name('policy-and-tos.storeMedia');
        Route::post('policy-and-tos/ckmedia', 'PolicyAndTosController@storeCKEditorImages')->name('policy-and-tos.storeCKEditorImages');
        Route::resource('policy-and-tos', 'PolicyAndTosController', ['except' => ['destroy', 'show', 'create', 'store']])->parameters([
            'policy-and-tos' => 'policy-and-tos:id',
        ]);

        // Sales Page
        Route::delete('sales-pages/destroy', 'SalesPageController@massDestroy')->name('sales-pages.massDestroy');
        Route::resource('sales-pages', 'SalesPageController')->parameters([
            'sales-pages' => 'sales-page:id',
        ]);
        Route::post('/update-template-content', 'SalesPageController@updateTemplateContent')->name('update_template_content');

        // Template
        Route::post('/load-template-fields', 'TemplateController@loadTemplateFields')->name('load_template_fields');
        Route::post('templates/media', 'TemplateController@storeMedia')->name('templates.storeMedia');
        // Route::post('templates/ckmedia', 'TemplateController@storeCKEditorImages')->name('templates.storeCKEditorImages');
        Route::resource('templates', 'TemplateController', ['except' => ['show', 'destroy']]);
    });

    Route::group(['prefix' => 'crm'], function () {
        // Customer
        Route::delete('customers/destroy', 'CustomerController@massDestroy')->name('customers.massDestroy');
        Route::resource('customers', 'CustomerController');

    });


    Route::group(['prefix' => 'settings'], function () {
        // Business Info
        Route::delete('business-infos/destroy', 'BusinessInfoController@massDestroy')->name('business-infos.massDestroy');
        Route::resource('business-infos', 'BusinessInfoController', ['except' => ['destroy', 'show', 'create', 'store']]);

    });

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


Route::group(['namespace' => 'Public'], function () {
    Route::get('/pages/{salesPage:slug}', 'SalesPagesController@show')->name('pages.view');
});
