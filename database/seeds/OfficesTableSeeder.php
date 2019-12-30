<?php

use App\Office;
use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create(array(
            'name' => 'Headquarters',
            'location_id' => 1
        ));
        Office::create(array(
            'name' => 'Remote office',
            'location_id' => 2
        ));
        Office::create(array(
            'name' => 'Zuckerberg',
            'location_id' => 3
        ));
    }
}
