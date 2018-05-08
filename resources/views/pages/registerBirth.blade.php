@extends('layouts.master')
@section('title')
    {{ 'Welcome' }}
@endsection
@push('head')
@endpush
@section('content')
    <div class='jumbotron'>
        <h1>Birth Registration Form</h1>

        <form method="GET" action="/getbirthform" class="form-group">
            {{ csrf_field() }}
            <div class='row'>
                <label class='col-3' for='pregid'><span class="error">*</span>Pregnancy ID</label>
                <div class='col-9 columnspacer'><input type='text' class='form-control' name='pregid' id='pregid'
                                                       value='{{ old('pregid') }}'>
                </div> @include('incudes.error-field', ['field' => 'pregid'])
            </div>
            <div class='textspacer'></div>
            <button class='btn btn-primary btn-block' type='Submit'>Get form</button>
        </form>
    </div>
@endsection