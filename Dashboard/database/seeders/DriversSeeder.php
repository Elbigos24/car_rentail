<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            'order_id'=>'ORD123456',
            'user_id'=>1,
            'licence_number'=>123456789,
            'img'=>'driver1.jpg',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $dato1 = new Driver();
        $dato1->order_id = 'ORD654321';
        $dato1->user_id = 2;
        $dato1->licence_number = 987654321;
        $dato1->img = 'driver2.jpg';
        $dato1->created_at = date('Y-m-d H:i:s');
        $dato1->updated_at = date('Y-m-d H:i:s');
        $dato1->save();
    }
}
