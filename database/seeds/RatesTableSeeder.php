<?php

use Illuminate\Database\Seeder;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->insert([
            [
                'user_id'   => 1,
                'marker_id' => 1,
                'like'      => true,
            ],
            [
                'user_id'   => 1,
                'marker_id' => 2,
                'like'      => true,
            ],
            [
                'user_id'   => 1,
                'marker_id' => 3,
                'like'      => false,
            ],
            [
                'user_id'   => 1,
                'marker_id' => 5,
                'like'      => true,
            ],
            [
                'user_id'   => 2,
                'marker_id' => 1,
                'like'      => false,
            ],
            [
                'user_id'   => 2,
                'marker_id' => 2,
                'like'      => false,
            ],
            [
                'user_id'   => 4,
                'marker_id' => 1,
                'like'      => true,
            ],
            [
                'user_id'   => 4,
                'marker_id' => 3,
                'like'      => true,
            ],
            [
                'user_id'   => 4,
                'marker_id' => 4,
                'like'      => false,
            ],
            [
                'user_id'   => 4,
                'marker_id' => 5,
                'like'      => true,
            ],
        ]);
    }
}
