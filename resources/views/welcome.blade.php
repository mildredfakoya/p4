@extends('layouts.master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')
    <div class='jumbotron'>
        <h1>Getting Started</h1>
        <div class='outer'>
            <div class='heading'>
                <h3>Getting started</h3>
            </div>
            <div class='container'>
                <p> This project features one of the functionalities of a large software project i have developed in the
                    past. <br/>
                    For the purpose of this project, the antenatal registration system is aimed at registration of women
                    into Antenatal care and afterwards, registration of pregnancies for women with
                    an antenatal account. </p>
                <h4>How to use</h4>
                <p>Every client should first have an antenatal account before a pregnancy can be registered. So start by
                    creating an antenatal account. <strong>Note: </strong>Several pregnancies can be associated with one
                    antenatal account. Each pregnancy can be associated with only one antenatal account.
                </p>
                <p>After Antenatal registrration, then a pregnancy can be registered. You will be required to provide
                    the unique ID that was used to create the antenatal account to get the pregnancy registration form.
                    Once a unique ID, that has an associated antenatal account is provided, a pregnancy registration
                    form is populated on the page with a readonly field containing the verified unique ID.
                    When the form is filled and submitted, if the any of the checkboxes for the risk category is
                    checked, the pregnancy will be registered with an associated risk on file.
                </p>
                <p>To get the list of all active pregnancies, click on the "Active Registered Pregnancy List". This List
                    consists of all the registered pregnancies that does not have an associated birth record. Any
                    pregnancy with an associated birth record will not be presented on this page.
                </p>

            </div>
        </div>
    </div>
@endsection