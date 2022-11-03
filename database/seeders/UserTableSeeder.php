<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Taiwo Ogundele';
        $user->email = 'admin.taiwooguns@unstack.io';
        $user->password = bcrypt('123456');
        $user->is_active = true;
        $user->role = 'admin';
        $user->uuid = bin2hex(random_bytes(20));
        $user->save();

        $user = new User;
        $user->name = 'Audrey Armstrong';
        $user->email = 'user.audreyarmstrong@unstack.io';
        $user->password = bcrypt('123456');
        $user->is_active = true;
        $user->role = 'regular';
        $user->uuid = bin2hex(random_bytes(20));
        $user->save();

        $user = new User;
        $user->name = 'Tamunoye Ibinabo';
        $user->email = 'support.ibinabotamunoye@unstack.io';
        $user->password = bcrypt('123456');
        $user->is_active = true;
        $user->role = 'support';
        $user->uuid = bin2hex(random_bytes(20));
        $user->save();
    }
}
