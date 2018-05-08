@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')

    <div class='jumbotron'>
        <h1>Update Details</h1>
        <form method="GET" action="/update" class="form-group">
            {{ csrf_field() }}
            <div class='row'>
                <label class='col-3' for="uniqueid'><span class=" error">*</span>Please enter the Unique ID</label>
                <div class='col-9 columnspacer'><input type='text' class='form-control' name='uniqueid'
                                                       id='uniqueid' value='{{ old('uniqueid') }}'>
                </div> @include('incudes.error-field', ['field' => 'uniqueid'])
            </div>
            <div class='textspacer'></div>
            <button class='btn btn-primary btn-block' type='Submit'>Get Record</button>
        </form>
    </div>
@endsection