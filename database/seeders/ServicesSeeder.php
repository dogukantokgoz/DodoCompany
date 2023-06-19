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
           'datatitle' => 'birinci kutu başlık',
           'datacontent' => 'birinci kutu açıklama',
           'calltitle' => 'Call To Action',
           'callcontent' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
           'featurestitle' => 'birinci kutu başlık',
           'featurescontent' =>'birinci kutu açıklama',
           'countstitle' =>'birinci kutu açıklama',
           'countscontent' =>'birinci kutu açıklama',
        ]);

    }
}

