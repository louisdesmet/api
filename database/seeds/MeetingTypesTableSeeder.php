<?php

use App\MeetingType;
use Illuminate\Database\Seeder;

class MeetingTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MeetingType::create(array(
            'name' => 'office',
        ));
        MeetingType::create(array(
            'name' => 'phone',
        ));
        MeetingType::create(array(
            'name' => 'on_location',
        ));
        MeetingType::create(array(
            'name' => 'video',
        ));
    }
}
