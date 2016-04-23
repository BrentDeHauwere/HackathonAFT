<?php

use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->insert([
            [
                'user_id'	=> 1,
                'marker_id'	=> 1,
            ],
            [
                'user_id'	=> 1,
                'marker_id'	=> 2,
            ],
            [
                'user_id'	=> 1,
                'marker_id'	=> 3,
            ],
            [
                'user_id'	=> 3,
                'marker_id'	=> 4,
            ],
            [
                'user_id'	=> 4,
                'marker_id'	=> 1,
            ],
            [
                'user_id'	=> 4,
                'marker_id'	=> 2,
            ],
        ]);
    }
}
