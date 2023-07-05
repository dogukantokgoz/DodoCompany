<?php

namespace Database\Seeders;

use App\Models\Pricings;
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
        $pricings = [
            [
                'title' => 'Pricings',
                'content' => 'Pricings Content',
                'price_title' => 'Free',
                'price' => '0',
                'price_time' => 'month',
                'madde1'=> 'Aida dere',
                'madde2'=> 'Nec feugiat nisl',
                'madde3'=> 'Nulla at volutpat dola',
                'madde4'=> 'Pharetra massa',
                'madde5'=> 'Massa ultricies mi',
            ],
            [
                'title' => 'Pricings',
                'content' => 'Pricings Content',
                'price_title' => 'Business',
                'price' => '19',
                'price_time' => 'month',
                'madde1'=> 'Aida dere',
                'madde2'=> 'Nec feugiat nisl',
                'madde3'=> 'Nulla at volutpat dola',
                'madde4'=> 'Pharetra massa',
                'madde5'=> 'Massa ultricies mi',
            ],
            [
                'title' => 'Pricings',
                'content' => 'Pricings Content',
                'price_title' => 'Pro',
                'price' => '29',
                'price_time' => 'month',
                'madde1'=> 'Aida dere',
                'madde2'=> 'Nec feugiat nisl',
                'madde3'=> 'Nulla at volutpat dola',
                'madde4'=> 'Pharetra massa',
                'madde5'=> 'Massa ultricies mi',
            ]
        ];

        foreach ($pricings as $pricing) {
            Pricings::create($pricing);
        }
    }
}
