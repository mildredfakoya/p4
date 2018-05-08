<?php

use Illuminate\Database\Seeder;
use App\Pregnancy;
use App\RiskCategory;

class PregnancyRiskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $pregs = [
            '45518' => ['age'],
            '45528' => ['age', 'syphilis'],
            '45538' => ['age', 'hiv-aids'],
            '56518' => ['age'],
            '78518' => ['age', 'syphilis'],
            '89518' => ['age'],
            '89528' => ['age', 'syphilis']

        ];

        foreach ($pregs as $pregid => $risks) {
            $preg = Pregnancy::where('preg_id', '=', $pregid)->first();

            foreach ($risks as $riskName) {
                $risk = RiskCategory::where('name', 'LIKE', $riskName)->first();

                if (!empty($risk)) {
                    $preg->riskcategory()->save($risk);
                }
            }
        }
    }

}
