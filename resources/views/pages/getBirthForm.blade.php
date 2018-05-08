@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')

    <div class='jumbotron'>
        <h1>Birth Registration form</h1>
        <div class='outer'>
            <div class='heading'>
                <h3><span class="error">*</span> Required Field</h3>
            </div>
            <div class='container'>
                <form method="POST" action="/regbirth" class="form-group">
                    {{ csrf_field() }}
                    <div class='row'>
                        <label class='col-3' for='uniqueid'><span class="error">*</span>Pregnancy ID</label>
                        <div class='col-9 columnspacer'><input type="text" name="pregid" id="pregid" value="{{$pregid}}"
                                                               readonly/></div>
                    </div>
                    <div class='textspacer'></div>

                    <div class='row'>
                        <label class='col-3' for='firstname'>First Name</label>
                        <div class='col-9 columnspacer'><input type='text' class='form-control' name='firstname'
                                                               id='firstname' value='{{ old('firstname') }}'>
                        </div>
                    </div>
                    <div class='textspacer'></div>
                    <div class='row'>
                        <label class='col-3' for='lastname'>Last Name</label>
                        <div class='col-9 columnspacer'><input type='text' class='form-control' name='lastname'
                                                               id='lastname' value='{{ old('lastname') }}'>
                        </div>
                    </div>
                    <div class='textspacer'></div>

                    <div class="row">
                        <label class="col-3" for="datepicker"><span class ='error'>*</span>Date of Birth</label>
                        <div class="col-9 columnspacer">
                            <input data-format="dd/MM/yyyy" id="datepicker" type="text" name="dob"
                                   class="form-control"/>
                            @include('incudes.error-field', ['field' => 'dob'])
                        </div>

                    </div>
                    <div class='textspacer'></div>

                    <div class='row'>
                        <label class='col-3' for='gender'><span class="error">*</span>Gender</label>
                        <div class='col-9 columnspacer'><input type='radio'  name='gender'
                                                               id ='gender' value='male'/> Male<br/>
                            <input type='radio'name='gender'
                                   id ='gender' value='female'/> Female
                            @include('incudes.error-field', ['field' => 'gender'])
                        </div>
                    </div>
                    <div class='textspacer'></div>


                    <div class='textspacer'></div>


                    <button class='btn btn-success' type='Submit'>Register</button>


                </form>
            </div>
        </div>
    </div>
@endsection