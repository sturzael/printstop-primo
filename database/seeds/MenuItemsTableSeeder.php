<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-11 22:10:24',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-12 00:10:28',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-12 00:10:28',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-12 00:10:28',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-12 00:54:16',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-12 00:10:28',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 6,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-12 00:10:29',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 7,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-12 00:10:29',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 8,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-12 00:10:29',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2018-11-11 22:10:24',
                'updated_at' => '2018-11-12 00:10:28',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 9,
                'created_at' => '2018-11-11 22:52:21',
                'updated_at' => '2018-11-12 00:10:29',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Product Management',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-archive',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2018-11-12 00:08:42',
                'updated_at' => '2018-11-12 00:10:07',
                'route' => 'voyager.product-management.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Stock Management',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-documentation',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2018-11-12 00:53:49',
                'updated_at' => '2018-11-12 00:54:24',
                'route' => 'voyager.stock-management.index',
                'parameters' => 'null',
            ),
        ));
        
        
    }
}