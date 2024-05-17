<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(50)->create();

        $explicitUsers = [
            [
                'id' => 1000,
                'name' => 'Student User',
                'user_code' => 'v1000',
                'password' => Hash::make('password'),

            ],
            [
                'id' => 1001,
                'name' => 'Student User1',
                'user_code' => 'v1001',
                'password' => Hash::make('password'),

            ],
            [
                'id' => 1002,
                'name' => 'INP User',
                'user_code' => 'v1002',
                'password' => Hash::make('password'),

            ],
            [
                'id' => 1003,
                'name' => 'Admin User',
                'user_code' => 'v1003',
                'password' => Hash::make('password'),

            ],
        ];

        // 사용자 데이터를 데이터베이스에 삽입
        foreach ($explicitUsers as $user) {
            User::create($user);
        }
    }
}
