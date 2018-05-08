<?php

use Illuminate\Database\Seeder;
use App\RiskCategory;

class Risk_categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $risks = ['age', 'hiv-aids', 'syphilis'];

        foreach ($risks as $riskName) {
            $risk = new RiskCategory();
            $risk->name = $riskName;
            $risk->save();
        }
    }
}
