<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregnancy;
use App\Birth;
use App\Registration;

class HistoryController extends Controller
{
    Public function history(){
       $pregnancies =  Pregnancy::where('status', '!=','inactive')->get();
        //$pregnancies = Pregnancy::orderBy('created_at')->get();
        return view('pages.pregnancyList')->with([
            'pregnancies' => $pregnancies,
        ]);

    }

    Public function birthhistory(){
        $births = Birth::orderBy('created_at')->get();
        return view('pages.birthList')->with([
            'births' => $births,
        ]);

    }


}
