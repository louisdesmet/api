<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create(array(
            'name' => 'Afspraak omtrent loonsverhoging',
            'description' => 'Loonsverhoging is iets wat je moet verdienen.',
            'subject_category_id' => 1
        ));
        Subject::create(array(
            'name' => 'Afspraak omtrent werkloosheid',
            'description' => 'Werkloosheid is een jammer gebeuren.',
            'subject_category_id' => 2
        ));
        Subject::create(array(
            'name' => 'Afspraak omtrent uitkering',
            'description' => 'Een uitkering kunnen we niet zomaar aan iedereen geven.',
            'subject_category_id' => 3
        ));
        Subject::create(array(
            'name' => 'Afspraak omtrent versnelling',
            'description' => 'Hoe kunnen we versnellen?',
            'subject_category_id' => 1
        ));
        Subject::create(array(
            'name' => 'Afspraak omtrent problematiek',
            'description' => 'Problemen zijn er altijd.',
            'subject_category_id' => 1
        ));
        Subject::create(array(
            'name' => 'Afspraak omtrent drugsgebruik',
            'description' => 'Drugs is gevaarlijk, carefull kids!.',
            'subject_category_id' => 2
        ));
    }
}
