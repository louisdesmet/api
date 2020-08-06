<?php

use App\Outcome;
use Illuminate\Database\Seeder;

class OutcomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Outcome::create(array(
        'name' => 'Klant heeft telefonisch/per mail afgezegd.',
        'description' => 'Deze klant is zegt af. Herplannen?'
      ));
      Outcome::create(array(
        'name' => 'We kunnen deze klant niet verder helpen.',
        'description' => 'We hebben geen voordeel aan deze klant.'
      ));
      Outcome::create(array(
        'name' => 'Elke reden',
        'description' => 'Een reden persoonlijk aan de klant.'
      ));
    }
}
