<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Rentail;

class RentalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rentals')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'car_id' => 1,
                'driver_id' => 1,
                'pickup_date' => '2024-07-01',
                'return_date' => '2024-07-10',
                'total_amount' => 500,
                'status' => 'completed',
            ],
            
        ]);
        $rental = new Rentail();
        $rental->user_id = 2;
        $rental->car_id = 2;
        $rental->driver_id = 2;
        $rental->pickup_date = '2024-08-01';
        $rental->return_date = '2024-08-05';
        $rental->total_amount = 300;
        $rental->status = 'pending';
        $rental->save();
    }
}
