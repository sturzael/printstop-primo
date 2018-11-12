<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-11-11 22:10:23',
                'updated_at' => '2018-11-11 22:10:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-11-11 22:10:23',
                'updated_at' => '2018-11-11 22:10:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-11-11 22:10:23',
                'updated_at' => '2018-11-11 22:10:23',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'product_management',
                'slug' => 'product-management',
                'display_name_singular' => 'Product Management',
                'display_name_plural' => 'Product Management',
                'icon' => 'voyager-archive',
                'model_name' => 'Primo\\product_model',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-11-12 00:08:42',
                'updated_at' => '2018-11-12 01:37:31',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'stock_management',
                'slug' => 'stock-management',
                'display_name_singular' => 'Stock Management',
                'display_name_plural' => 'Stock Managements',
                'icon' => 'voyager-documentation',
                'model_name' => 'Primo\\StockManagement',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-11-12 00:53:49',
                'updated_at' => '2018-11-12 00:53:49',
            ),
        ));
        
        
    }
}