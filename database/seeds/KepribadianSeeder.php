<?php

use Illuminate\Database\Seeder;

class KepribadianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kepribadian')->insert([
            'id' => 1,
            'name' => 'INFP',
            'description' 
            => 
            'INFP adalah seseorang yang idealis, teguh memegang prinsip,
             dan setia terutama pada orang-orang penting dalam hidupnya. 
             Tipe kepribadian MBTI ini memiliki rasa ingin tahu yang tinggi, 
             terbuka dengan berbagai kemungkinan. 
             Ia adalah sosok yang fleksibel dan adaptif, 
             kecuali pada prinsip yang dipegangnya.',
        ]);

        DB::table('kepribadian')->insert([
            'id' => 2,
            'name' => 'INFP',
            'description' 
            => 
            'INFP adalah seseorang yang idealis, teguh memegang prinsip,
             dan setia terutama pada orang-orang penting dalam hidupnya. 
             Tipe kepribadian MBTI ini memiliki rasa ingin tahu yang tinggi, 
             terbuka dengan berbagai kemungkinan. 
             Ia adalah sosok yang fleksibel dan adaptif, 
             kecuali pada prinsip yang dipegangnya.',
        ]);

        DB::table('kepribadian')->insert([
            'id' => 3,
            'name' => 'INFP',
            'description' 
            => 
            'INFP adalah seseorang yang idealis, teguh memegang prinsip,
             dan setia terutama pada orang-orang penting dalam hidupnya. 
             Tipe kepribadian MBTI ini memiliki rasa ingin tahu yang tinggi, 
             terbuka dengan berbagai kemungkinan. 
             Ia adalah sosok yang fleksibel dan adaptif, 
             kecuali pada prinsip yang dipegangnya.',
        ]);

        DB::table('kepribadian')->insert([
            'id' => 4,
            'name' => 'INFP',
            'description' 
            => 
            'INFP adalah seseorang yang idealis, teguh memegang prinsip,
             dan setia terutama pada orang-orang penting dalam hidupnya. 
             Tipe kepribadian MBTI ini memiliki rasa ingin tahu yang tinggi, 
             terbuka dengan berbagai kemungkinan. 
             Ia adalah sosok yang fleksibel dan adaptif, 
             kecuali pada prinsip yang dipegangnya.',
        ]);

        DB::table('kepribadian')->insert([
            'id' => 5,
            'name' => 'INFP',
            'description' 
            => 
            'INFP adalah seseorang yang idealis, teguh memegang prinsip,
             dan setia terutama pada orang-orang penting dalam hidupnya. 
             Tipe kepribadian MBTI ini memiliki rasa ingin tahu yang tinggi, 
             terbuka dengan berbagai kemungkinan. 
             Ia adalah sosok yang fleksibel dan adaptif, 
             kecuali pada prinsip yang dipegangnya.',
        ]);
    }
}
