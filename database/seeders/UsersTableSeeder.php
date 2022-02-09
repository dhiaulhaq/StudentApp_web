<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'faculty' => 'Teknik',
            'major' => 'Teknik Informatika',
            'username' => 'admin',
            'password' => bcrypt('admin1234'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Maulana',
            'faculty' => 'Teknik',
            'major' => 'Teknik Pertambangan',
            'username' => 'maulana',
            'password' => bcrypt('maulana1234'),
            'role_id' => 2
        ]);
    }
}
