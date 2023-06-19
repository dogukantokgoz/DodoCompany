<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
           'title' => 'Dodo Company Global A.Ş',
            'content' => 'Her masada varız',
            'video' => 'https://www.youtube.com/watch?v=qAX_O2e3hx4',
        ]);
    }
}
