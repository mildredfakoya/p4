<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Registration;
use App\Uuid;
use App\Pregnancy;
use App\Risk;
use App\Birth;
use App\RiskCategory;
use Illuminate\Support\Facades\Input;
use Debugbar;

class RegisterController extends Controller
{
    Public function index()
    {
        return view('pages.ancRegistration');

    }


    public function register(Request $request)
    {
        $this->validate($request, [
            'uniqueid' => 'required|numeric|digits:5',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'dob' => 'required',

        ]);


        $uuid = new Uuid();
        $registration = new Registration();
        $code = bin2hex(random_bytes(20));
        $uuid->uuid = $code;
        $uuid->unique_id = $request->uniqueid;
        $registration->unique_id = $request->uniqueid;
        $registration->first_name = $request->firstname;
        $registration->middle_name = $request->middlename;
        $registration->last_name = $request->lastname;
        $registration->dob = $request->dob;
        $registration->marital_status = $request->maritalstatus;
        $registration->occupation = $request->occupation;
        $registration->phone = $request->phone;
        $registration->address = $request->address;

        if (Registration::where('unique_id', '=', Input::get('uniqueid'))->exists()) {


            return redirect('/register')->with(
                ['alert-failure' => 'Failure!! The unique ID used has been registered previously. Please use another unique ID if you are registering a new client or proceed to pregnancy registration for old clients']
            );
        } else {
            $uuid->save();
            $registration->save();


            // Include the tags here
            #unique_id on the registrations table should be feoreign key on the uuid table

            return redirect('/register')->with(
                ['alert-success' => 'The Antenatal account has been created successfully']
            );


        }
    }


    Public function pregreg()
    {

        return view('pages.registerPregnancy');

    }

    Public function pregregform(Request $request)
    {

        $this->validate($request, [
            'uniqueid' => 'required|numeric|digits:5',

        ]);


        $registration = new Registration();
        $registration->unique_id = $request->uniqueid;
        if (Registration::where('unique_id', '=', Input::get('uniqueid'))->exists()) {

            return view('pages.pregnancyForm')->with([
                'uniqueid' => $request->uniqueid,
                'riskForCheckboxes' => RiskCategory::getCheckboxes(),
            ]);

        } else {
            return redirect('/register')->with(
                ['alert-failure' => 'The unique ID entered does not have an antenatal account Please create antenatal account using the below form']
            );
        }

    }

    Public function pregsave(Request $request)
    {
        $this->validate($request, [
            'pregid' => 'required|numeric|digits:5',
            'lmp' => 'nullable|date',
            'edd' => 'nullable|date',

        ]);


        $pregnancy = new Pregnancy();
        $pregnancy->unique_id = $request->uniqueid;
        $pregnancy->preg_id = $request->pregid;
        $pregnancy->lmp = $request->lmp;
        $pregnancy->edd = $request->edd;

        $risk = new Risk();
        $risk->unique_id = $request->uniqueid;
        $risk->preg_id = $request->pregid;

        if (Pregnancy::where('preg_id', '=', Input::get('pregid'))->exists()) {

            return redirect('/pregnancy')->with(
                ['alert-failure' => 'The pregnancy ID used already exists. Please use another ID ']
            );


        } else {

            $pregnancy->save();


            if ($request->risks != '' || $request->risks != NULL) {
                $risk->save();
            }
            $pregnancy->riskcategory()->sync($request->risks);
            //$pregnancy->riskcategory()->sync($request->input(risks));


            // Include the tags here
            #unique_id on the registrations table should be feoreign key on the uuid table

            return redirect('/pregnancy')->with(
                ['alert-success' => 'The pregnancy has been registered successfully']
            );


        }

    }

    Public function birth()
    {
        return view('pages.registerBirth');

    }

    Public function birthform(Request $request)
    {
        $this->validate($request, [
            'pregid' => 'required|numeric|digits:5',

        ]);


        $pregnancy = new Pregnancy();
        $pregnancy->preg_id = $request->pregid;
        if (Pregnancy::where('preg_id', '=', Input::get('pregid'))->exists()) {
            return view('pages.getBirthForm')->with([
                'pregid' => $request->pregid,
            ]);


        } else {
            return redirect('/birth')->with(
                ['alert-failure' => 'The Birth you are trying to register does not have an associated pregnancy on record']
            );

        }
    }

    Public function registerbirth(Request $request)
    {
        $this->validate($request, [
            'pregid' => 'required|numeric|digits:5',
            'dob' => 'required|date',
            'gender' => 'required',

        ]);


        $birth = new Birth();
        $birth->preg_id = $request->pregid;
        $birth->first_name = $request->firstname;
        $birth->last_name = $request->lastname;
        $birth->dob = $request->dob;
        $birth->gender = $request->gender;


        if (Birth::where('preg_id', '=', Input::get('pregid'))->exists()) {

            return redirect('/pregnancy')->with(
                ['alert-failure' => 'The Birth you are trying to register has been previously registered']
            );


        } else {

            $birth->save();
            DB::table('pregnancies')->where('preg_id', '=', $birth->preg_id)->update(array('status' => 'inactive'));

            return redirect('/history')->with([
                'alert-success' => 'The Birth was successfully registered.'
            ]);

            // Include the tags here
            #unique_id on the registrations table should be feoreign key on the uuid table


        }

    }

    Public function updatedetails()
    {
        return view('pages.getUpdateForm');

    }

    Public function update(Request $request)
    {
        $this->validate($request, [
            'uniqueid' => 'required|numeric|digits:5',

        ]);


        $registration = new Registration();
        $registration->unique_id = $request->uniqueid;
        if (Registration::where('unique_id', '=', Input::get('uniqueid'))->exists()) {
            $client = Registration::where('unique_id', '=', Input::get('uniqueid'))->first();

            $firstname = $client->first_name;
            $lastname = $client->last_name;
            $phone = $client->phone;
            $occupation = $client->occupation;
            $address = $client->address;
            $uniqueid = $client->unique_id;
            return view('pages.UpdateForm')->with([
                'uniqueid' => $uniqueid,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'phone' => $phone,
                'occupation' => $occupation,
                'address' => $address,
            ]);


        } else {
            return redirect('/updatereg')->with(
                ['alert-failure' => 'The account you are trying to edit does not exist']
            );

        }
    }


    Public function saveupdate(Request $request)
    {
        $this->validate($request, [
            'uniqueid' => 'required|numeric|digits:5',

        ]);


        $registration = new Registration();
        $registration->unique_id = $request->uniqueid;
        $registration->phone = $request->phone;
        $registration->occupation = $request->occupation;
        $registration->address = $request->address;


        if (Registration::where('unique_id', '=', Input::get('uniqueid'))->exists()) {


            DB::table('registrations')->where('unique_id', '=', $registration->unique_id)->update(array('phone' => $registration->phone, 'occupation' => $registration->occupation, 'address' => $registration->address));
            //$registration->save();
            return redirect('/updatereg')->with([
                'alert-success' => 'Update was successful'
            ]);


        } else {

            return redirect('/updatereg')->with(
                ['alert-failure' => 'update failed']
            );


        }

    }


}
