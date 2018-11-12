<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;
class DatabaseSeeder extends Seeder
{

  use Seedable;

  protected $seedersPath = __DIR__.'/';
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->seed('DataTypesTableSeeder');
      $this->seed('DataRowsTableSeeder');
      $this->seed('MenusTableSeeder');
      $this->seed('MenuItemsTableSeeder');
      $this->seed('RolesTableSeeder');
      $this->seed('PermissionsTableSeeder');
      $this->seed('PermissionRoleTableSeeder');
      $this->seed('SettingsTableSeeder');
        $this->call('ProductTableSeeder');
        $this->call('StockTypeTableSeeder');
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
    }
}
