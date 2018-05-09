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
                <p> This project features some of the functionalities of a large software project i have developed in
                    the
                    past. <br/>
                    For the purpose of this project, the antenatal registration system is aimed at registration of women
                    into Antenatal care and afterwards, registration of pregnancies for women with
                    an antenatal account. During the registration of pregnancies, depending on the form values filled,
                    pregnancies with risk are automatically added to a separate record. </p>
                <h4>How to use</h4>
                <p>Every client should first have an antenatal account before a pregnancy can be registered. So start by
                    creating an antenatal account, using the "Antenatal Registration" Link. <strong>Note: </strong>Several
                    pregnancies can be associated with one
                    antenatal account. Each pregnancy can be associated with only one antenatal account.
                </p>
                <p>After Antenatal registration, then a pregnancy can be registered, using the "Pregnancy Registration"
                    Link. You will be required to provide
                    the unique ID that was used to create the antenatal account to get the pregnancy registration form.
                    When the form is filled and submitted, if any of the checkboxes for the risk category is
                    checked, a risk record will be automatically created for the pregnancy.
                </p>
                <p>To get the list of all active pregnancies, click on the "Active Registered Pregnancy List". This List
                    consists of all the registered pregnancies that does not have an associated birth record. Any
                    pregnancy with an associated birth record will not be presented on this page.
                </p>
                <p>
                    To register a birth, click on "Birth Registration" link.
                    You will be required to provide a pregnancy ID to get a birth registration form.
                </p>
                <p>
                    To get a list of all registered births, click on the "All Registered Births" link.
                </p>
                <p>
                    To update client's details, click on the "Update client details" link. You will be required to
                    provide the unique ID of the client whose details you wish to edit.
                </p>
                <p>
                    To delete a birth, click on "Delete a birth" link.
                </p>
            </div>
        </div>
    </div>
@endsection