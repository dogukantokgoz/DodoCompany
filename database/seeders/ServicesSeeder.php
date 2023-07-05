<?php

namespace Database\Seeders;

use App\Models\Services;
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
            'title' => 'services',
            'content' => 'servis açıklama',
            'call_title' => 'Call To Action',
            'call_content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'features_title' => 'Resim Başlık',
            'features_content' => 'Resim açıklama',
            'features_icon' => '',
            'foto' => '',
            'counts_title' => 'Counts başlık',
            'counts_content' => 'Counts açıklama',
        ]);

        $services = [
            [
                'data_title' => 'birinci kutu başlık',
                'data_content' => 'birinci kutu açıklama',
                'data_icon' => '',
            ],
            [

                'data_title' => 'ikinci kutu başlık',
                'data_content' => 'ikinci kutu açıklama',
                'data_icon' => '',
            ],
            [

                'data_title' => 'üçüncü kutu başlık',
                'data_content' => 'üçüncü kutu açıklama',
                'data_icon' => '',
            ],
        ];

        foreach ($services as $service) {
            Services::create($service);
        }
    }
}
