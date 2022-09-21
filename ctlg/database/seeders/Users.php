<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Users;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => Str::random(10) . 'wahyu',
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('wahyu'),
        ]);
    }
}