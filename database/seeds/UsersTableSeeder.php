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
        DB::table('users')->insert([
            [
                'fname'     => 'Brent',
                'lname'     => 'De Hauwere',
                'email'     => 'brentdehauwere@gmail.com',
                'password'  => bcrypt('secret'),
                'picture'   => str_random(10),
            ],
            [
                'fname'     => 'Sam',
                'lname'     => 'Castaigne',
                'email'     => 'samcastaigne@gmail.com',
                'password'  => bcrypt('secret'),
                'picture'   => str_random(10),
            ],
            [
                'fname'     => 'Dieter',
                'lname'     => 'Holvoet',
                'email'     => 'dieterholvoet@gmail.com',
                'password'  => bcrypt('secret'),
                'picture'   => str_random(10),
            ],
            [
                'fname'     => 'Sammy',
                'lname'     => 'Sadati',
                'email'     => 'sammysadati@gmail.com',
                'password'  => bcrypt('secret'),
                'picture'   => str_random(10),
            ],
        ]);
    }
}
