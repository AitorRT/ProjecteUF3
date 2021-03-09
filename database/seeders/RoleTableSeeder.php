<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->role = 'guest';
        $role->desc = 'explore without  seeing';
        $role->save();
        $role = new Role();
        $role->role = 'user';
        $role->desc = 'score and watch videos';
        $role->save();
        $role = new Role();
        $role->role = 'loader';
        $role->desc = 'push, watch and label videos';
        $role->save();
        $role = new Role();
        $role->role = 'admin';
        $role->desc = 'user and video administration';
        $role->save();
    }
}
