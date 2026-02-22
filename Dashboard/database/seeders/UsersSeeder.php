<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Josue Hernandez',
            'email'=>'josue.hernandez@example.com',
            'created_at'=>date('Y-m-d H:i:s'),
            'password'=>bcrypt('password'),
            'loyalty_points'=>100,
            'loyalty_level_id'=>1,
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
