<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregnancy extends Model
{
    public function riskcategory()
    {
        return $this->belongsToMany('App\RiskCategory')->withTimestamps();
    }
}
