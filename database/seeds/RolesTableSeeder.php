<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = \App\Role::create([
            'name' => 'super_admin',
            'display_name' => 'super admin',
            'description' => 'this role can do anything'
        ]);

        $user = \App\Role::create([
            'name' => 'user',
            'display_name' => 'user',
            'description' => 'this role is limited'
        ]);
    }
}
