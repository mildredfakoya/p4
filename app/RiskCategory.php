<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RiskCategory extends Model
{
    public function pregnancies() {
        return $this->belongsToMany('App\Pregnancy')->withTimestamps();
    }
}
