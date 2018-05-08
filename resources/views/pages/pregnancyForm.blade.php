@extends('layouts.master')
@section('title')
    {{ 'Welcome' }}
@endsection
@push('head')
@endpush
@section('content')
    <div class='jumbotron'>
        <h1>Pregnancy Registration form</h1>
        <div class='outer'>
            <div class='heading'>
                <h3><span class="error">*</span> Required Field</h3>
            </div>
            <div class='container'>
                <form method="POST" action="/regpreg" class="form-group">
                    {{ csrf_field() }}
                    <div class='row'>
                        <label class='col-3' for='uniqueid'><span class="error">*</span>Unique ID</label>
                        <div class='col-9 columnspacer'><input type="text" name="uniqueid" id="uniqueid"
                                                               value="{{$uniqueid}}" readonly/></div>
                    </div>
                    <div class='textspacer'></div>
                    <div class='row'>
                        <label class='col-3' for='pregid'><span class="error">*</span>Pregnancy ID</label>
                        <div class='col-9 columnspacer'><input type='text' class='form-control' name='pregid'
                                                               id='pregid' value='{{ old('pregid') }}'>
                        </div> @include('incudes.error-field', ['field' => 'pregid'])
                    </div>
                    <div class='textspacer'></div>
                    <div class="row">
                        <label class="col-3" for="datepicker">Last Menstrual Period</label>
                        <div class="col-9 columnspacer">
                            <input data-format="dd/MM/yyyy" id="datepicker" type="text" name="lmp"
                                   class="form-control"/>
                        </div>
                    </div>
                    <div class='textspacer'></div>
                    <div class="row">
                        <label class="col-3" for="datepicker2">Expected Date of Delivery</label>
                        <div class="col-9 columnspacer">
                            <input data-format="dd/MM/yyyy" id="datepicker2" type="text" name="edd"
                                   class="form-control"/>
                        </div>
                    </div>
                    <div class='textspacer'></div>
                    <div class='row'>
                        <label class='col-3' for='pregid'>Risk Category</label>
                        <div class='col-9 columnspacer'>
                            @foreach($riskForCheckboxes as $riskId => $riskName)
                                <ul>
                                    <li>
                                        <input type='checkbox' name='risks[]' value='{{ $riskId }}'>
                                        {{ $riskName }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class='textspacer'></div>
                    <button class='btn btn-success' type='Submit'>Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection