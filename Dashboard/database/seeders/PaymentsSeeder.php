<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;

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
        $payment = new Payment();
        $payment->rental_id = 2;
        $payment->amount = 300;
        $payment->payment_date = '2024-07-02';
        $payment->payment_method = 'cash';
        $payment->status = 'pending';
        $payment->save();
    }
}
