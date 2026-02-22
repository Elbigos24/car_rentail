<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'id' => 1,
                'rental_id' => 1,
                'amount' => 500,
                'payment_date' => '2024-07-01',
                'payment_method' => 'credit_card',
                'status' => 'completed',
            ],
            
        ]);
    }
}
