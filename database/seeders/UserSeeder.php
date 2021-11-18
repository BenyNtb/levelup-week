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
                'name' => 'Beny Ntb',
                'role_id' => 1,
                // 'tag_id' => 2,
                'email' => "admin@luw.com",
                'password' =>Hash::make('admin2021'),
                'created_at'=> now(),
            ],
            [
                'name' => 'Fanny Nzb',
                'role_id' => 2,
                // 'tag_id' => 2,
                'email' => "auteur@luw.com",
                'password' =>Hash::make('auteur2021'),
                'created_at'=> now(),
            ],
            [
                'name' => 'Maurice Brown',
                'role_id' => 3,
                // 'tag_id' => 2,
                'email' => "utilisateur@luw.com",
                'password' =>Hash::make('utilisateur2021'),
                'created_at'=> now(),
            ],
            [
                'name' => 'Kaylin Nicole',
                'role_id' => 4,
                // 'tag_id' => 2,
                'email' => "editeur@luw.com",
                'password' =>Hash::make('editeur2021'),
                'created_at'=> now(),
            ],
        ]);
    }
}
