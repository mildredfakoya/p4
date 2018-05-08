@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')
    <div class ='jumbotron'>

        <h1>All Registered Births</h1>
        @if(count($births) > 0)
            <div class ='row'>
                <div class ='col-2'><strong>Pregnancy ID</strong></div>
                <div class ='col-2 columnspacer'><strong>First Name</strong></div>
                <div class ='col-2 columnspacer'><strong>Last Name</strong></div>
                <div class ='col-3 columnspacer'><strong>Date of Birth</strong></div>
                <div class ='col-2 columnspacer'><strong>Gender</strong></div>
            </div>
            <div class ='textspacer'></div>
            @foreach($births as $list)
                <div class ='row'>
                    <div class ='col-2'><label>{{$list->preg_id}}</label></div>
                    <div class ='col-2 columnspacer'><label>{{$list->first_name}}</label></div>
                    <div class ='col-2 columnspacer'><label>{{$list->last_name}}</label></div>
                    <div class ='col-3 columnspacer'><label>{{$list->dob}}</label></div>
                    <div class ='col-2 columnspacer'><label>{{$list->gender}}</label></div>
                </div>
                <div class ='textspacer'></div>
            @endforeach
        @endif
    </div>>
@endsection