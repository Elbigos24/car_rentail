<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            'id'=>1,
            'brand_id'=>1,
            'models'=>'Corolla',
            'year'=>2020,
            'color'=>'Red',
            'licence_plate'=>'ABC123',
            'mileage'=>15000,
            'lat'=>40.7128,
            'lng'=>-74.0060,
            'Is_premium'=>0,
            'rental_count'=>5,
            'daly_rate'=>50,
            'status'=>'available',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
