<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John ni2',
            'email' => 'johnwfw2@example.com',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);

        User::create([
            'name' => 'Jane sssSmith',
            'email' => 'jane@example.com',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);

        User::create([
            'name' => 'Alice Johnson',
            'email' => 'alice@example.com',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);

        User::create([
            'name' => 'Bob Brown',
            'email' => 'bob@example.com',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);

        User::create([
            'name' => 'Charlie ',
            'email' => 'charlizzz@example.com',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);
        User::create([
            'name' => 'Mamli Davis',
            'email' => 'chas@example.com',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);
        User::create([
            'name' => 'Hery',
            'email' => 'charliaa@example.com',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);
        User::create([
            'name' => 'Cuklis',
            'email' => 'charliwww@example.com',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);
        User::create([
            'name' => 'Memey',
            'email' => 'charlwwwae@example.com',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);
        User::create([
            'name' => 'Fajrin',
            'email' => 'fajrin@gmail.com',
            'password' => bcrypt('Fajrin123'),
            'role' => 'student',
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin123'),
            'role' => 'admin',
        ]);
    }
}
