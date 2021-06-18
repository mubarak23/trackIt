<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class user_role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_roles')->delete();

    $user_role = [
        ['id' => 1, 'name' => 'admin'],
        ['id' => 2, 'name' => 'user'],
    ];

    User_Role::insert($user_role);
    }
}
