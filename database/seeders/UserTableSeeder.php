<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_guest = Role::where('role', 'guest')->first();
        $role_user = Role::where('role', 'user')->first();
        $role_loader = Role::where('role', 'loader')->first();
        $role_admin = Role::where('role', 'admin')->first();
        $user = new User();
        $user->role_id = $role_guest->id;
        $user->name = 'Guest';
        $user->email = 'guest@example.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user = new User();
        $user->role_id = $role_user->id;
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user = new User();
        $user->role_id = $role_loader->id;
        $user->name = 'Loader';
        $user->email = 'loader@example.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user = new User();
        $user->role_id = $role_admin->id;
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = Hash::make('secret');
        $user->save();
    }
}
