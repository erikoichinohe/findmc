<?php

use Illuminate\Database\Seeder;
use App\Mc;

class McTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete
        Mc::truncate();

        //Insert
        Mc::insert([
            'name' => 'mc1',
            'email' => 'mc1@test.com',
            'password' => Hash::make('mc1')
        ]);
    }
}
