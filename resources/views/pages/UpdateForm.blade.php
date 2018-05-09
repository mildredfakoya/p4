@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')
    <div class='jumbotron'>

        <h1>Edit Details</h1>
        <form method="POST" action='/saveupdate'>
            {{ csrf_field() }}

            <div class='row'>
                <div class='col-2'><strong>Unique ID</strong></div>
                <div class='col-2 columnspacer'><strong>First Name</strong></div>
                <div class='col-2 columnspacer'><strong>Last Name</strong></div>
                <div class='col-2 columnspacer'><strong>Telephone</strong></div>
                <div class='col-2 columnspacer'><strong>Occupation</strong></div>
                <div class='col-2 columnspacer'><strong>Address</strong></div>
            </div>
            <div class='textspacer'></div>
            <div class='row'>
                <div class='col-2'><strong><input type="text" name='uniqueid' value='{{$uniqueid}}'></strong>
                </div>
                <div class='col-2 columnspacer'><strong>{{$firstname}}</strong></div>
                <div class='col-2 columnspacer'><strong>{{$lastname}}</strong></div>
                <div class='col-2 columnspacer'><input type="text" name='phone' value='{{$phone}}'></div>
                <div class='col-2 columnspacer'><input type="text" name='occupation' value='{{$occupation}}'></div>
                <div class='col-2 columnspacer'><input type="text" name='address' value='{{$address}}'></div>
            </div>
            <div class='textspacer'></div>
            <button type="submit">Update</button>

        </form>
    </div>
@endsection