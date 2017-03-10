<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete
        User::truncate();

        //Insert
        User::insert([
            [
                'name' => 'user1',
                'email' => 'user1@test.com',
                'password' => Hash::make('user1')
            ]
        ]);
    }
}
