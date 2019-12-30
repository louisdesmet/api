<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create(array(
            'street' => 'Nieuwland 46',
            'postal' => '9000',
            'city' => 'Gent',
            'country' => 'BE',
            'lat' => '51.0616454',
            'lng' => '3.730057299999999'
        ));
        Location::create(array(
            'street' => 'Zuiderlaan 3',
            'postal' => '9000',
            'city' => 'Gent',
            'country' => 'BE',
            'lat' => '51.0479466',
            'lng' => '3.6934135'
        ));
        Location::create(array(
            'street' => 'Bomastraat 3',
            'postal' => '9000',
            'city' => 'Gent',
            'country' => 'BE',
            'lat' => '51.0619237',
            'lng' => '3.730704199999999'
        ));
    }
}
