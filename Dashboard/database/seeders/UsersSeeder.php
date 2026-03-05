<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Josue Hernandez',
            'img'=>'josue.jpg',
            'email'=>'josue.hernandez@example.com',
            'created_at'=>date('Y-m-d H:i:s'),
            'password'=>bcrypt('password'),
            'loyalty_points'=>100,
            'loyalty_level_id'=>1,
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
            $dato1 = new User();    
            $dato1->name = 'Maria Garcia';
            $dato1->img = 'maria.jpg';
            $dato1->email = 'maria.garcia@example.com';
            $dato1->password = bcrypt('password');
            $dato1->loyalty_points = 200;
            $dato1->loyalty_level_id = 2;
            $dato1->created_at = date('Y-m-d H:i:s');
            $dato1->updated_at = date('Y-m-d H:i:s');
            $dato1->save();
    }
}
