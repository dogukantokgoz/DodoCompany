<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert([
            'title' => 'Pricings',
            'content' => 'Pricings content',
            'price_title' =>'Free',
            'price'=> '0',
            'price_time'=> 'month',
            'madde1' => 'Aida dere',
            'madde2' => 'Nec feugiat nisl',
            'madde3' => 'Nulla at volutpat dola',
            'madde4' => 'Pharetra massa',
            'madde5' => 'Massa ultricies mi',
        ]);
    }
}
