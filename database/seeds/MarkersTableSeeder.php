<?php

use Illuminate\Database\Seeder;

class MarkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('markers')->insert([
            [
                'name'          => 'Pan Africa Market',
                'address'       => '1521 1st Ave, Seattle, WA',
                'lat'           => 47.608941,
                'lng'           => -122.340145,
                'type'          => 'restaurant',
                'description'   => 'A very nice restaurant, located in Washington',
                'picture'       => str_random(10),
                'user_id'       => 1
            ],
            [
                'name'          => 'Buddha Thai & Bar',
                'address'       => '2222 2nd Ave, Seattle, WA',
                'lat'           => 47.613591,
                'lng'           => -122.344394,
                'type'          => 'bar',
                'description'   => 'A very nice bar, located in Washington',
                'picture'       => str_random(10),
                'user_id'       => 2
            ],
            [
                'name'          => 'The Melting Pot',
                'address'       => '14 Mercer St, Seattle, WA',
                'lat'           => 47.624562,
                'lng'           => -122.356442,
                'type'          => 'restaurant',
                'description'   => 'A very nice restaurant, located in Washington',
                'picture'       => str_random(10),
                'user_id'       => 2
            ],
            [
                'name'          => 'Ipanema Grill',
                'address'       => '1225 1st Ave, Seattle, WA',
                'lat'           => 47.606366,
                'lng'           => -122.337656,
                'type'          => 'restaurant',
                'description'   => 'A very nice restaurant, located in Washington',
                'picture'       => str_random(10),
                'user_id'       => 3
            ],
            [

                'name'          => 'Sake House',
                'address'       => '2230 1st Ave, Seattle, WA',
                'lat'           => 47.612825,
                'lng'           => -122.34567,
                'type'          => 'bar',
                'description'   => 'A very nice bar, located in Washington',
                'picture'       => str_random(10),
                'user_id'       => 4
            ],
        ]);
    }
}
