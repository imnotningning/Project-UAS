<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'William.S.S',
            'email' => 'user@user.com',
            'phone' => '081288142078',
            'role' => 'user',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'wss',
            'email' => 'admin@admin.com',
            'phone' => '081239997974',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
    }
}
