<?php

use Illuminate\Database\Seeder;
use App\Uuid;

class UuidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uuids = [
            ['','01234'],
            ['','12345'],
            ['','23456'],
            ['','34567'],
            ['','45678'],
            ['','56789']

        ];

        $count = count($uuids);

        foreach ($uuids as $key => $regData) {
            $uuid = new Uuid();

            $uuid->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $uuid->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $uuid->uuid = $regData[0];
            $uuid->unique_id = $regData[1];

            $uuid->save();
            $count--;
        }
    }
}
