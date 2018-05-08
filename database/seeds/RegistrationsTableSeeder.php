<?php

use Illuminate\Database\Seeder;
use App\Registration;

class RegistrationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registrations = [
            ['01234', 'Alexandra', '', 'Johnson', '06-10-1988', 'married', 'employed', '987-6789', 'Ben street, wall house'],
            ['12345', 'Martha', '', 'Samuel', '02-08-1978', 'common law union', 'self-employed', '555-5555', 'castle street, castle comfort'],
            ['23456', 'Jennifer', 'Mercy', 'Jacob', '05-12-1982', 'married', 'unemployed', '127-6789', 'top belair, belair'],
            ['34567', 'Agnes', '', 'Paul', '12-06-1998', 'married', 'student', '222-2222', 'ben corner, kingstown'],
            ['45678', 'Mariam', 'Ann', 'Peter', '01-01-2005', 'single', 'student', '911-9876', 'Queens drive, belair'],
            ['56789', 'Patricia', 'Rose', 'James', '06-10-2004', 'single', 'student', '117-6789', 'lance aux epines']

        ];

        $count = count($registrations);

        foreach ($registrations as $key => $regData) {
            $reg = new Registration();

            $reg->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $reg->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $reg->unique_id = $regData[0];
            $reg->first_name = $regData[1];
            $reg->middle_name = $regData[2];
            $reg->last_name = $regData[3];
            $reg->dob = $regData[4];
            $reg->marital_status = $regData[5];
            $reg->occupation = $regData[6];
            $reg->phone = $regData[7];
            $reg->address = $regData[8];

            $reg->save();
            $count--;
        }
    }
}
