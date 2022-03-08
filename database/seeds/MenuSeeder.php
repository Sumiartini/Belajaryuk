<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'men_image' => 'assets/images/chicken/dada.png' ,
            'men_cut_type' => "Dada" ,
            'men_price' => 15000,
            'men_stock' => 10,
            
        ]);
        DB::table('menu')->insert([
            'men_image' => 'assets/images/chicken/paha_atas.png' ,
            'men_cut_type' => "Paha atas" ,
            'men_price' => 15000,
            'men_stock' => 10,
            
        ]);
        DB::table('menu')->insert([
            'men_image' => 'assets/images/chicken/paha_bawah.png' ,
            'men_cut_type' => "Paha bawah" ,
            'men_price' => 15000,
            'men_stock' => 10,
            
        ]);
        DB::table('menu')->insert([
            'men_image' => 'assets/images/chicken/sayap.png' ,
            'men_cut_type' => "Sayap" ,
            'men_price' => 15000,
            'men_stock' => 10,
            
        ]);
    }
}
