<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(['email'=> 'admin@gmail.com'],[
            'name' => 'Admin',
            'password' => bcrypt('12345678'),
        ]);
    }
}
