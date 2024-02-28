<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_create',
            ],
            [
                'id'    => 18,
                'title' => 'product_edit',
            ],
            [
                'id'    => 19,
                'title' => 'product_show',
            ],
            [
                'id'    => 20,
                'title' => 'product_delete',
            ],
            [
                'id'    => 21,
                'title' => 'product_access',
            ],
            [
                'id'    => 22,
                'title' => 'customer_create',
            ],
            [
                'id'    => 23,
                'title' => 'customer_edit',
            ],
            [
                'id'    => 24,
                'title' => 'customer_show',
            ],
            [
                'id'    => 25,
                'title' => 'customer_delete',
            ],
            [
                'id'    => 26,
                'title' => 'customer_access',
            ],
            [
                'id'    => 27,
                'title' => 'order_create',
            ],
            [
                'id'    => 28,
                'title' => 'order_edit',
            ],
            [
                'id'    => 29,
                'title' => 'order_show',
            ],
            [
                'id'    => 30,
                'title' => 'order_delete',
            ],
            [
                'id'    => 31,
                'title' => 'order_access',
            ],
            [
                'id'    => 32,
                'title' => 'setting_access',
            ],
            [
                'id'    => 33,
                'title' => 'business_info_create',
            ],
            [
                'id'    => 34,
                'title' => 'business_info_edit',
            ],
            [
                'id'    => 35,
                'title' => 'business_info_show',
            ],
            [
                'id'    => 36,
                'title' => 'business_info_delete',
            ],
            [
                'id'    => 37,
                'title' => 'business_info_access',
            ],
            [
                'id'    => 38,
                'title' => 'tracking_create',
            ],
            [
                'id'    => 39,
                'title' => 'tracking_edit',
            ],
            [
                'id'    => 40,
                'title' => 'tracking_show',
            ],
            [
                'id'    => 41,
                'title' => 'tracking_delete',
            ],
            [
                'id'    => 42,
                'title' => 'tracking_access',
            ],
            [
                'id'    => 43,
                'title' => 'to_create',
            ],
            [
                'id'    => 44,
                'title' => 'to_edit',
            ],
            [
                'id'    => 45,
                'title' => 'to_show',
            ],
            [
                'id'    => 46,
                'title' => 'to_delete',
            ],
            [
                'id'    => 47,
                'title' => 'to_access',
            ],
            [
                'id'    => 48,
                'title' => 'store_access',
            ],
            [
                'id'    => 49,
                'title' => 'cupon_create',
            ],
            [
                'id'    => 50,
                'title' => 'cupon_edit',
            ],
            [
                'id'    => 51,
                'title' => 'cupon_show',
            ],
            [
                'id'    => 52,
                'title' => 'cupon_delete',
            ],
            [
                'id'    => 53,
                'title' => 'cupon_access',
            ],
            [
                'id'    => 54,
                'title' => 'store_setting_create',
            ],
            [
                'id'    => 55,
                'title' => 'store_setting_edit',
            ],
            [
                'id'    => 56,
                'title' => 'store_setting_show',
            ],
            [
                'id'    => 57,
                'title' => 'store_setting_delete',
            ],
            [
                'id'    => 58,
                'title' => 'store_setting_access',
            ],
            [
                'id'    => 59,
                'title' => 'sales_page_create',
            ],
            [
                'id'    => 60,
                'title' => 'sales_page_edit',
            ],
            [
                'id'    => 61,
                'title' => 'sales_page_show',
            ],
            [
                'id'    => 62,
                'title' => 'sales_page_delete',
            ],
            [
                'id'    => 63,
                'title' => 'sales_page_access',
            ],
            [
                'id'    => 64,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
