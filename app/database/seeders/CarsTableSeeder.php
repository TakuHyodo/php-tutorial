<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('cars')->insert([
            'name' => '車1',
            'company_id' => 1,
            'cc' => 100,
            'sale_date' => now(),
            'memo' => null,
            'image_url' => null,
        ]);

        Car::factory()->count(100)->create();  //追加
    }
}
