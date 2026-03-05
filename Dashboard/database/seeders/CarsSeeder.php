<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

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
        $dato1 = new Car();
        $dato1->id = 2;
        $dato1->brand_id = 2;
        $dato1->models = 'Civic';
        $dato1->year = 2019;
        $dato1->color = 'Blue';
        $dato1->licence_plate = 'XYZ789';
        $dato1->mileage = 20000;
        $dato1->lat = 34.0522;
        $dato1->lng = -118.2437;
        $dato1->Is_premium = 1;
        $dato1->rental_count = 10;
        $dato1->daly_rate = 80;
        $dato1->status = 'available';
        $dato1->created_at = date('Y-m-d H:i:s');
        $dato1->updated_at = date('Y-m-d H:i:s');
        $dato1->save();
    }
}
