<?php

use Illuminate\Database\Seeder;
use App\Risk;

class RisksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $risks = [
            ['12345','45518'],
            ['12345', '45528'],
            ['12345', '45538'],
            ['23456', '56518'],
            ['45678', '78518'],
            ['56789', '89518'],
            ['56789', '89528']
        ];

        $count = count($risks);

        foreach ($risks as $key => $regData) {
            $risk = new Risk();

            $risk->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $risk->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $risk->unique_id = $regData[0];
            $risk->preg_id = $regData[1];

            $risk->save();
            $count--;
        }
    }
}
