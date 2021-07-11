<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = [
            'name' => 'Superadmin',
            'username' => 'superadmin',
            'email' => 'setiawaneggy@gmail.com',
            'mobile' => '081387239119',
            'email_verified_at' => now(),
            'password' => bcrypt('superadmin#'), // password
            'remember_token' => Str::random(10),
        ];

        User::create($superadmin);
    }
}
