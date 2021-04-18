<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'user',
            'email' => 'user@user',
            'password' => bcrypt('user'),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'gestionnaire',
            'email' => 'gestionnaire@gestionnaire',
            'password' => bcrypt('gestionnaire'),
        ]);
    }
}
