<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \App\Models\User::create([
        'full_name'=>'Admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('012345678'),
        'mobile_number'=>'01452655263',
        'address'=>'Dhaka',
        'role'=>'admin',
        'email_verified_at'=> now()
    ]);

    }
}
