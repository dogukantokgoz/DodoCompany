<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
          'title' => 'Contact',
          'content' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit',
          'locationtitle' => 'Location',
          'locationcontent' => 'Örnek Mah. Zemzeme Sk.',
          'emailtitle' => 'Email',
          'emailcontent' => 'deneme@email.com',
          'calltitle' => 'Call',
          'callcontent' => '+90 530 366 77 88',
            ]);
    }
}
