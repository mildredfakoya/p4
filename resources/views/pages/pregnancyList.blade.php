@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')
    <div class ='jumbotron'>

    <h1>Active Registered Pregnancies</h1>
    @if(count($pregnancies) > 0)
        <div class ='row'>
            <div class ='col-6'><strong>Unique ID</strong></div>
            <div class ='col-6 columnspacer'><strong>Pregnancy ID</strong></div>
        </div>
        @foreach($pregnancies as $list)
            <div class ='row'>
                <div class ='col-6'><label>{{ $list->unique_id }}</label></div>
                <div class ='col-6 columnspacer'><label>{{ $list->preg_id }}</label></div>
            </div>
            <div class ='textspacer'></div>
        @endforeach
    @endif
    </div>>
@endsection