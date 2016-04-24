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
                'name'          => 'Kinepolis',
                'address'       => 'Eeuwfeestlaan 20,1020 Brussel',
                'lat'           => 50.895568,
                'lng'           => 4.337406,
                'type'          => 'cinema',
                'title'         => 'Marker 1',
                'description'   => 'Gezellig een filmpje kijken met de vrienden.',
                'picture'       => 'https://lh4.googleusercontent.com/proxy/zhEnxrGl1blTq4VgWJKDUZlM5h2AFx1aNAz8AL09cb1WGYJrzT0rzYPKh-2K8PHXAccK97lsEeRFE-L2BGQVmq9DXcHxVw=w408-h306',
                'user_id'       => 1
            ],
            [
                'name'          => 'Madame Moustache',
                'address'       => 'Brandhoutkaai 5-7,1000 Brussel',
                'lat'           => 50.851579,
                'lng'           => 4.348977,
                'type'          => 'discotheek',
                'title'         => 'Marker 2',
                'description'   => 'Hipste club van Brussel. Zeker de moeite om hier te komen feesten.',
                'picture'       => 'http://www.brusselslife.be/sites/default/files/gallery/madame_moustache_02.jpg',
                'user_id'       => 2
            ],
            [
                'name'          => 'Bar Bik',
                'address'       => 'Arduinkaai 3,1000 Brussel',
                'lat'           => 50.855417,
                'lng'           => 4.351881,
                'type'          => 'bar',
                'title'         => 'Marker 3',
                'description'   => 'Ziek nice bar! Echt wauw. Wow. Geweldig. Ongelofelijk. Much Wow.',
                'picture'       => 'http://assets.digi.persgroep.be/location_photo/w500/91/L_0000189591.jpg',
                'user_id'       => 2
            ],
            [
                'name'          => 'Autoworld',
                'address'       => '1000 Brussel',
                'lat'           => 50.839866,
                'lng'           => 4.393252,
                'type'          => 'museum',
                'title'         => 'Marker 4',
                'description'   => 'Voor de autofanaten, zeker hier eens passeren. Intersante expo over Italian supercars.',
                'picture'       => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Autoworld_002.jpg',
                'user_id'       => 3
            ],
            [

                'name'          => 'Manneken Pis',
                'address'       => '1000 Brussel',
                'lat'           => 50.845310,
                'lng'           => 4.350019,
                'type'          => 'monument',
                'title'         => 'Marker 5',
                'description'   => 'Meest iconische plaats in heel Brussel.',
                'picture'       => 'http://www.scientias.nl/wp-content/uploads/2015/08/manneken-pis.jpg',
                'user_id'       => 4
            ],
        ]);
    }
}