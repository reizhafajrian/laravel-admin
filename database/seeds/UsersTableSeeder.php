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
        App\User::create([
            'name' => 'Guruh',
            'email' => 'guruh@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => "Admin"
     ]);    
    }
}
