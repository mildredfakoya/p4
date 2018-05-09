@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')

    <div class='jumbotron'>
        <h1>Antenatal Registration form</h1>
        <div class='outer'>
            <div class='heading'>
                <h3><span class="error">*</span> Required Field</h3>
            </div>
            <div class='container'>
                <form method="POST" action="/saveancreg" class="form-group">
                    {{ csrf_field() }}
                    <div class='row'>
                        <label class='col-3' for='uniqueid'><span class="error">*</span>Unique ID</label>
                        <div class='col-9 columnspacer'><input type='text' class='form-control' name='uniqueid'
                                                               id='uniqueid' value='{{ old('uniqueid') }}'>
                        </div> @include('incudes.error-field', ['field' => 'uniqueid'])
                    </div>
                    <div class='textspacer'></div>


                    <div class='row'>
                        <label class='col-3' for='firstname'><span class="error">*</span>First Name</label>
                        <div class="col-9 columnspacer"><input type='text' class='form-control' name='firstname'
                                                               id='firstname' value='{{ old('firstname') }}'></div>
                        @include('incudes.error-field', ['field' => 'firstname'])
                    </div>
                    <div class='textspacer'></div>
                    <div class='row'>
                        <label class='col-3' for='middlename'>Middle Name</label>
                        <div class="col-9 columnspacer"><input type='text' class='form-control' name='middlename'
                                                               id='middlename' value='{{ old('middlename') }}'>
                        </div>
                    </div>
                    <div class='textspacer'></div>

                    <div class='row'>
                        <label class='col-3' for='lastname'><span class="error">*</span>Last Name</label>
                        <div class="col-9 columnspacer"><input type='text' class='form-control' name='lastname'
                                                               id='lastname' value='{{ old('lastname') }}'></div>
                        @include('incudes.error-field', ['field' => 'lastname'])
                    </div>
                    <div class='textspacer'></div>

                    <div class="row">
                        <label class="col-3" for="datepicker"><span class="error">*</span>Date of Birth</label>
                        <div class="col-9 columnspacer">
                            <input data-format="dd/MM/yyyy" id="datepicker" type="text" name="dob"
                                   class="form-control"/>
                        </div>
                        @include('incudes.error-field', ['field' => 'dob'])
                    </div>
                    <div class="textspacer"></div>
                    <div class='row'>
                        <label class='col-3' for='maritalstatus'>Marital Status</label>
                        <div class="col-9 columnspacer"><select name="maritalstatus" id ="maritalstatus">
                                <option value='{{old("maritalstatus")}}' selected>{{old("maritalstatus")}}</option>
                                <option value='n/a'>N/A</option>
                                <option value='single'>Single</option>
                                <option value='married'>Married</option>
                                <option value='widowed'>Widowed</option>
                                <option value='seperated'>Separated</option>
                                <option value='divorced'>Divorced</option>
                                <option value='common law union'>Common Law Union</option>
                            </select></div>
                    </div>
                    <div class='textspacer'></div>

                    <div class='row'>
                        <label class='col-3' for='lastname'>Occupation</label>
                        <div class="col-9 columnspacer"><select name="occupation" id ="occupation">
                                <option value='{{old("occupation")}}' selected>{{old('occupation')}}</option>
                                <option value='n/a'>N/A</option>
                                <option value='retired'>Retired</option>
                                <option value='student'>Student</option>
                                <option value='unemployed'>UnEmployed</option>
                                <option value='employed'>Employed</option>
                                <option value='self-employed'>Self-employed</option>
                                <option value='other'>Other</option>
                            </select></div>
                    </div>
                    <div class='textspacer'></div>

                    <div class='row'>
                        <label class='col-3' for='phone'>Telephone Number</label>
                        <div class="col-9 columnspacer"><input type='text' class='form-control' name='phone' id='phone'
                                                               value='{{ old('phone') }}'></div>
                    </div>
                    <div class='textspacer'></div>

                    <div class='row'>
                        <label class='col-3' for='address'>Address</label>
                        <div class="col-9 columnspacer"><input type='text' class='form-control' name='address'
                                                               id='address' value='{{ old('address') }}'></div>
                    </div>
                    <div class='textspacer'></div>
                    <button class='btn btn-success' type='Submit'>Register</button>


                </form>
            </div>
        </div>
    </div>
@endsection