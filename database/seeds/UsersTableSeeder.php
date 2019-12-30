<?php

use App\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name'          => 'Louis De Smet',
            'email'         => 'info@louis.be',
            'password'      => Hash::make('kankerjood'),
        ));
    
        User::create(array(
            'name'          => 'Christophe Verote',
            'email'         => 'info@christophe.be',
            'password'      => Hash::make('kankerjood'),
        ));
    
        User::create(array(
            'name'          => 'Jolien De Waele',
            'email'         => 'info@jolien.be',
            'password'      => Hash::make('kankerjood'),
        ));
    }
}
