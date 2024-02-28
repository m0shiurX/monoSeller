<?php

return [
    'userManagement' => [
        'title'          => 'ব্যবহারকারী ব্যবস্থাপনা',
        'title_singular' => 'ব্যবহারকারী ব্যবস্থাপনা',
    ],
    'permission' => [
        'title'          => 'অনুমতিসমূহ',
        'title_singular' => 'অনুমতি',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'ভূমিকা/রোলগুলি',
        'title_singular' => 'ভূমিকা/রোল',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'ব্যবহারকারীগণ',
        'title_singular' => 'ব্যবহারকারী',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Product',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'customer' => [
        'title'          => 'Customer',
        'title_singular' => 'Customer',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'order' => [
        'title'          => 'Order',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'product'           => 'Product',
            'product_helper'    => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => ' ',
            'status'            => 'Status',
            'status_helper'     => 'Status of the current order',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
    ],
    'businessInfo' => [
        'title'          => 'Business Info',
        'title_singular' => 'Business Info',
    ],
    'tracking' => [
        'title'          => 'Tracking',
        'title_singular' => 'Tracking',
    ],
    'to' => [
        'title'          => 'Privacy Policy & ToS',
        'title_singular' => 'Privacy Policy & To',
    ],
    'store' => [
        'title'          => 'Store',
        'title_singular' => 'Store',
    ],
    'cupon' => [
        'title'          => 'Cupon',
        'title_singular' => 'Cupon',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'code'               => 'Code',
            'code_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'valid_till'         => 'Valid Till',
            'valid_till_helper'  => ' ',
            'valid_from'         => 'Valid From',
            'valid_from_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'storeSetting' => [
        'title'          => 'Store Settings',
        'title_singular' => 'Store Setting',
    ],
    'salesPage' => [
        'title'          => 'Sales Page',
        'title_singular' => 'Sales Page',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'title'                => 'Title',
            'title_helper'         => ' ',
            'slug'                 => 'Slug',
            'slug_helper'          => ' ',
            'product'              => 'Product',
            'product_helper'       => ' ',
            'header_script'        => 'Header Script',
            'header_script_helper' => ' ',
            'footer_script'        => 'Footer Script',
            'footer_script_helper' => ' ',
            'html_content'         => 'Html Content',
            'html_content_helper'  => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],

];
