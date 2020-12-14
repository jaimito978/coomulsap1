<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['guard_name' => 'web', 'name' => 'Admin']);
        $role = Role::create(['guard_name' => 'web', 'name' => 'User']);
    }

}
