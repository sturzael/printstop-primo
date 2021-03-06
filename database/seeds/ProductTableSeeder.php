<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = strtotime( "November 11, 2018" );
      DB::table('product_management')->insert(
        array(
          'product_id' => '14776',
          'product_type'=> '11',
          'paper'=>'Leaflet',
          'product_name'=>'Infigo Leaflet demo product',
          'product_description'=>'Demo project built for testing',
          'product_image' => 'uploadImage.jpg',
          'created_at' => date( 'Y-m-d', $timestamp ),
          'updated_at' => date( 'Y-m-d', $timestamp )
        )
      );
    }
    }
