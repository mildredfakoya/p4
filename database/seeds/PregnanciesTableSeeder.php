<?php

use Illuminate\Database\Seeder;
use App\Pregnancy;

class PregnanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pregnancies = [
            ['01234', '34518', '', '', ''],
            ['12345', '45518', '', '', 'inactive'],
            ['12345', '45528', '', '', 'inactive'],
            ['12345', '45538', '', '', ''],
            ['23456', '56518', '', '', ''],
            ['34567', '67518', '', '', 'inactive'],
            ['34567', '67528', '', '', ''],
            ['45678', '78518', '', '', ''],
            ['56789', '89518', '', '', 'inactive'],
            ['56789', '89528', '', '', '']
        ];

        $count = count($pregnancies);

        foreach ($pregnancies as $key => $regData) {
            $preg = new Pregnancy();

            $preg->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $preg->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $preg->unique_id = $regData[0];
            $preg->preg_id = $regData[1];
            $preg->lmp = $regData[2];
            $preg->edd = $regData[3];
            $preg->status = $regData[4];

            $preg->save();
            $count--;
        }
    }
}
