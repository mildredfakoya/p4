<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UuidsTableSeeder::class);
        $this->call(RegistrationsTableSeeder::class);
        $this->call(PregnanciesTableSeeder::class);
        $this->call(RisksTableSeeder::class);
        $this->call(BirthsTableSeeder::class);
        $this->call(Risk_categoryTableSeeder::class);
        $this->call(PregnancyRiskTableSeeder::class);


    }
}
