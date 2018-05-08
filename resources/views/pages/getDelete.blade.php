@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')

    <div class='jumbotron'>
        <h1>Delete a Registered Birth</h1>

        <form method="GET" onsubmit="return confirm('Do you really want to delete?');" action="/getDelete"
              class="form-group">
            {{ csrf_field() }}
            <div class='row'>
                <label class='col-3' for='pregid'><span class="error">*</span>Please enter the Pregnancy ID for the
                    birth that you wish to delete</label>
                <div class='col-9 columnspacer'><input type='text' class='form-control' name='pregid'
                                                       id='pregid' value='{{ old('pregid') }}'>
                </div> @include('incudes.error-field', ['field' => 'pregid'])
            </div>
            <div class='textspacer'></div>
            <button class='btn btn-primary btn-block' type='Submit'>Delete Record</button>


        </form>
    </div>
@endsection