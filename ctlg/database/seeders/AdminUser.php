<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'wahyuhjr',
            'email' => 'wahyu11@gmail.com',
            'username' => 'wahyuhjr',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => Hash::make('wahyujr123'),
            'created_at' => date('Y-m-d H:i:s', time()),
            // 'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}