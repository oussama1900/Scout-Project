<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'display_name' => 'Admin',
            'description' => 'System administrator.',
            'removable' => false
        ]);

        Role::create([
            'name' => 'User',
            'display_name' => 'User',
            'description' => 'Default system user.',
            'removable' => false
        ]);

        Role::create([
            'name' => 'Captain',
            'display_name' => 'Captain',
            'description' => 'this is a captain',
            'removable' => false
        ]);

        Role::create([
            'name' => 'Editor',
            'display_name' => 'Editor',
            'description' => 'this is an Editor he can approve posts and edit them',
            'removable' => false
        ]);
    }
}
