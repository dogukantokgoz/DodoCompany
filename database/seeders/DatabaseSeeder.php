<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PageSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(PricingSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(HeroSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(UserSeeder::class);
    }
}
