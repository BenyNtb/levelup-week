<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => 'Admin',
                'role_id' => 1,
                // 'tag_id' => 2,
                'email' => "admin@luw.com",
                'password' =>Hash::make('admin2021'),
                'created_at'=> now(),
            ]
        ]);
    }
}
