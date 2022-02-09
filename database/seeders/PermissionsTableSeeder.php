<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'view data' // id 1
        ]);
        Permission::create([
            'name' => 'create data' // id 2
        ]);
        Permission::create([
            'name' => 'edit data' // id 3
        ]);
        Permission::create([
            'name' => 'update data' // id 4
        ]);
        Permission::create([
            'name' => 'delete data' // id 5
        ]);

        $admin = Role::where('name', 'admin')->first();
        $admin->permissions()->attach([1, 2, 3, 4, 5]);
    }
}
