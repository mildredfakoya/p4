@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')
    <div class ='jumbotron'>
        <h1>Getting Started</h1>
        <div class ='outer'>
            <div class ='heading'>
                <h3>Browser Compatibility</h3>
            </div>
            <div class ='container'>
                <p> This project will work correctly with all five major browsers (Google Chrome, Opera, Apple Safari, Internet Explorer (Edge) and Mozilla Firefox). There will however,
                    be a slight difference in user experience across these browsers.<br/>
                    Note that with internet explorer (edge) you will experience slow response time especially if you have errors in your inputs. Sometimes, you will be required to restart your browser.
                    if you have options of any of the other browsers listed above, avoid using internet explorer.</p>
            </div>
        </div>
@endsection