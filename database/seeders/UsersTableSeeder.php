<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            [
                'first_name' => 'Alex',
                'last_name' => 'Kot',
                'email' => 'alexkot@gmail.com',
                'password' => bcrypt('12345'),
                'address' => '84 Jalan Sinar Bulan Singapore',
                'postal_code' => '507074',
                'country' => 'Singapore',
            ],
            [
                'first_name' => 'Stephen',
                'last_name' => 'Peters',
                'email' => 'peters@gmail.com',
                'password' => bcrypt('54321'),
                'address' => '65A Cavenagh Road Waterscape',
                'postal_code' => '229620',
                'country' => 'Singapore',
            ],
        ];

        DB::table('users')->insert($usersData);
    }
}
