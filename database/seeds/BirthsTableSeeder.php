<?php

use Illuminate\Database\Seeder;

use App\Birth;

class BirthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $births = [
            ['45518', 'Anderson', 'Paul', '01-05-2018', 'male'],
            ['45528', 'Paul', 'James', '02-05-2018', 'male'],
            ['67518', 'Jennifer', 'Johnson', '04-05-2018', 'female'],
            ['89518', 'Mercy', 'Peter', '01-05-2018', 'female']
        ];

        $count = count($births);

        foreach ($births as $key => $regData) {
            $birth = new Birth();

            $birth->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $birth->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $birth->preg_id = $regData[0];
            $birth->first_name = $regData[1];
            $birth->last_name = $regData[2];
            $birth->dob = $regData[3];
            $birth->gender = $regData[4];

            $birth->save();
            $count--;
        }
    }
}

