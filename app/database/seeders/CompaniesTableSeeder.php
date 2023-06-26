<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('companies')->insert([
//            'company_id' => 1,
//            'company_name' => '株式会社Asia',
//            'prefecture_id' => '東京',
//            'memo' => null,
//            'image_url' => null,
//        ]);
        Company::factory()->count(100)->create();
    }
}
