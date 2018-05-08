<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RiskCategory extends Model
{
    public function pregnancies()
    {
        return $this->belongsToMany('App\Pregnancy')->withTimestamps();
    }


    public static function getCheckboxes()
    {
        $risk_categories = self::orderBy('name')->get();
        $riskForCheckboxes = [];
        foreach ($risk_categories as $risk) {
            $riskForCheckboxes[$risk->id] = $risk->name;
        }
        return $riskForCheckboxes;


    }
}