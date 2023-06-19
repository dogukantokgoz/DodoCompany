<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title'=> 'About',
            'content'=> 'içerik',
            'content1'=>'birinci içerik',
            'content2'=> 'ikinci içerik',
            'content3'=> 'üçüncü içerik',
            'step' => 'madde 1',
            'step1' => 'madde 2',
            'step2' => 'madde 2',
            'step3' => 'madde 3',
            'step4' => 'madde 4',
            'step5' => 'madde 5',
        ]);
    }
}
