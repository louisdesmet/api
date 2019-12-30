<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact1 = Contact::create(array(
            'user_id' => '1',
        ));
        $contact2 = Contact::create(array(
            'user_id' => '2',
        ));
        $contact3 = Contact::create(array(
            'user_id' => '3',
        ));
        
        $contact1->roles()->sync([1, 2, 3, 4]);
        $contact2->roles()->sync([3, 4]);
        $contact3->roles()->sync([4]);
    
        $contact1->offices()->sync([1, 2, 3]);
        $contact2->offices()->sync([2, 3]);
        $contact3->offices()->sync([3]);
        
        
    }
}
