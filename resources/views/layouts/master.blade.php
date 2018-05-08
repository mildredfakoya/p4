<!doctype html>
<html>
<head>
    <title>@yield('title', 'ANC data')</title>
    <meta charset='utf-8'>
    <link href='/css/foobooks.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>
<img class="img-responsive" src="/images/maternicare.jpg" alt="Logo" id ="logo" galleryimg="no">

<header>
    @include('incudes.nav')
</header>

@if(session('alert-success'))
    <div class='alert alert-info'>{{ session('alert-success') }}</div>
@endif

@if(session('alert-failure'))
    <div class='alert alert-danger'>{{ session('alert-failure') }}</div>
@endif

<section>
    @yield('content')
</section>


<link rel = "stylesheet" type ="text/css" href ="/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"/>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker({
            dateFormat: "dd-mm-yy"
        });

    });

    $(function() {
        $( "#datepicker2" ).datepicker({
            dateFormat: "dd-mm-yy"
        });

    });
</script>

@stack('body')

</body>
</html>
