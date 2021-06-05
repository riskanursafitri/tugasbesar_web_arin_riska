<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'palette',
            'name' => 'palette dessert',
            'email' => 'palette@dessert.com',
            'password' => Hash::make('password'),
        ]);
    }
}
