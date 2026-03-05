<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            'id'=>1,
            'name'=>'Toyota',
            'img'=>'imagen',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $dato1 = new Brand();
        $dato1->id = 2;
        $dato1->name = 'Honda';
        $dato1->img = 'imagen';
        $dato1->created_at = date('Y-m-d H:i:s');
        $dato1->updated_at = date('Y-m-d H:i:s');
        $dato1->save();
    }
}
