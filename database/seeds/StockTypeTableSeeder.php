<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Carbon;

class StockTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $timestamp = strtotime( "November 11, 2018" );
      DB::table('stock_management')->insert(
        array(
          'paper_id' => '7385',
          'paper_code'=> 'DIG GLO 130',
          'paper_name'=>'130 GSM Gloss',
          'paper_product'=>'Leaflet',
           'created_at' => date( 'Y-m-d', $timestamp ),
          'updated_at' => date( 'Y-m-d', $timestamp )
        )
      );
    }
}
