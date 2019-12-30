<?php

use App\SubjectCategory;
use Illuminate\Database\Seeder;

class SubjectCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubjectCategory::create(array(
            'name' => 'Meeting'
        ));
        SubjectCategory::create(array(
            'name' => 'Politics'
        ));
        SubjectCategory::create(array(
            'name' => 'Economics'
        ));
    }
}
