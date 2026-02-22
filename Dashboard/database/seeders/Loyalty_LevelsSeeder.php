<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Loyalty_LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loyalty_levels')->insert([
            'name'=>'Bronze',
            'min_points'=>0,
            'discount_percentage'=>0,
            'free_extra_hours'=>0,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('loyalty_levels')->insert([
            'name'=>'Silver',
            'min_points'=>100,
            'discount_percentage'=>5,
            'free_extra_hours'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('loyalty_levels')->insert([
            'name'=>'Gold',
            'min_points'=>500,
            'discount_percentage'=>10,
            'free_extra_hours'=>2,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
