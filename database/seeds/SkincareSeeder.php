<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkincareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skincares')->insert([
            'id' => 1,
            'name' => 'pelembab',
            'ingredient' => 'BHA, hyaluronic acid',
        ]);

        DB::table('skincares')->insert([
            'id' => 2,
            'name' => 'pelembab',
            'ingredient' => 'niacinamide, vit c, AHA',
        ]);
    }
}
