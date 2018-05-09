<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregnancy;
use App\Birth;
use DB;
use Debugbar;
use Illuminate\Support\Facades\Input;

class HistoryController extends Controller
{
    Public function history()
    {
        $pregnancies = Pregnancy::where('status', '=', ' ')->get();
        //$pregnancies = Pregnancy::orderBy('created_at')->get();
        return view('pages.pregnancyList')->with([
            'pregnancies' => $pregnancies,
        ]);

    }

    Public function birthhistory()
    {
        $births = Birth::orderBy('created_at')->get();
        return view('pages.birthList')->with([
            'births' => $births,
        ]);

    }

    Public function getdelete()
    {
        return view('pages.getDelete');

    }

    Public function getbirth(Request $request)
    {
        $this->validate($request, [
            'pregid' => 'required|numeric|digits:5',

        ]);


        $birth = new Birth();
        $birth->preg_id = $request->pregid;


        if (Birth::where('preg_id', '=', Input::get('pregid'))->exists()) {


            DB::table('births')->where('preg_id', '=', $birth->preg_id)->delete();

            return redirect('/deletebirth')->with([
                'alert-success' => 'The record has been deleted successfully'
            ]);


        } else {

            return redirect('/deletebirth')->with(
                ['alert-failure' => 'The record was not found / cannot be deleted']
            );


        }

    }


}
