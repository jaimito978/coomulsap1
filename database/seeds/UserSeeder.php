<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  User::create([
            'name' => 'Xiomara',
            'email' => 'recursoshumanos@coomulsap.com',
            'password' => Hash::make('coomulsap2020'),
        ]);
        
        $role = Role::where('name', 'Admin')->first();
        $user->assignRole($role);

    }
}
