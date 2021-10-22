<?php

use Illuminate\Database\Seeder;

class BrandSkincareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brandskincares')->insert([
            'id' => 1,
            'name' => 'Skin Dewi',
            'description' => 'Skincare terbaik pertama adalah Skin Dewi. Produk perawatan tubuh satu ini cocok untuk kalian yang mempunyai kulit sensitif. Namun, Skin Dewi juga mempunyai kelebihan untuk melembabkan kulit dan memperbaiki kulit yang berjerawat. Ini karena skincare satu ini mempunyai kandungan dari rempah-rempah pilihan. Seperti chamomile, calendula, dan oat. ',
        ]);

        DB::table('brandskincares')->insert([
            'id' => 2,
            'name' => 'Lacoco',
            'description' => 'Skincare Brand lokal lain yang direkomendasikan adalah Lacoco. Merk satu ini menyediakan beberapa produk untuk perawatan tubuh. Seperti facial foam, serum, essence, dan masker. Salah satu produk yang paling dibanggakan adalah Hydrating Divine Essence yang dipakai setelah menggunakan make up. Hasilnya, wajah menjadi lembab, terasa segar, harum, dan dingin.',
        ]);
    }
}
