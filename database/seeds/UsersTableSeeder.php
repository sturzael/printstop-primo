<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(
        array(
      'id' => '9999',
      'role_id' => '1',
      'name'=> 'admin',
      'email'=>'admin@nettl.com',
      'avatar' =>'users/default.png',
      'code'=>'99999',
      'password'=>'password'
  )
);
    }
}
