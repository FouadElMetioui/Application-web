<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
// use Hash;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
        'name'=>'admin',
        'isAdmin'=>true,
        'email'=> 'admin@example.com',
        'password'=>Hash::make('admin0000')
        ]);
    }
}
