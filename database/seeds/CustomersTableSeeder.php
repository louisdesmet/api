<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create(array(
            'first_name' => 'Louis',
            'last_name' => 'De Smet',
            'email' => 'louis@skedify.co',
        ));
        Customer::create(array(
            'first_name' => 'Oscar',
            'last_name' => 'De Smet',
            'email' => 'oscar@hotmail.com',
        ));
        Customer::create(array(
            'first_name' => 'Evelien',
            'last_name' => 'Van Oudenhove',
            'email' => 'evelien@hotmail.com',
        ));
    }
}
