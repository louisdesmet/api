<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(SubjectCategoriesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(OutcomesTableSeeder::class);
    }
}
