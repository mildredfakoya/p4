@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/books/show.css' type='text/css' rel='stylesheet'>
@endpush

@section('content')
    <h1>{{'Welcome to Project 4'}}</h1>

    <p>
        Instructions on how to use will go here
    </p>
@endsection