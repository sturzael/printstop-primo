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
      $this->seed('RolesTableSeeder');
      $this->seed('PermissionsTableSeeder');
      $this->seed('PermissionRoleTableSeeder');
      $this->seed('SettingsTableSeeder');
      $this->call('ProductTableSeeder');
      $this->call('StockTypeTableSeeder');
      $this->call('UsersTableSeeder');
      $this->call('MenusTableSeeder');
      $this->call('MenuItemsTableSeeder');
      $this->call(DataTypesTableSeeder::class);
      $this->call(DataRowsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
    }
}
