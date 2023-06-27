<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('services')->insert([
           'title' => 'Services',
           'content' => 'Servis Açıklama',
           'data_title' => 'birinci kutu başlık',
           'data_content' => 'birinci kutu açıklama',
           'call_title' => 'Call To Action',
           'call_content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
           'features_title' => 'birinci kutu başlık',
           'features_content' =>'birinci kutu açıklama',
           'counts_title' =>'birinci kutu açıklama',
           'counts_content' =>'birinci kutu açıklama',
        ]);

    }
}

