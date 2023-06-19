<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Home','About','Services','Portfolio','Pricing','Contact'];
        foreach ($pages as $page){
        DB::table('pages')->insert([
            'name' => $page,
            'slug' => Str::slug($page),
        ]);
        }
    }
}
