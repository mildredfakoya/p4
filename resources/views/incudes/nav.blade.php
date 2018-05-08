<nav class="navbar navbar-dark bg-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Project 4 .::. Antenatal Clinic</a>
    <!-- Toggler/collapsibe Button-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class ="navbar-nav">
            @foreach(config('app.nav') as $link => $label)
                <li><a class="navbar-brand" href='{{ $link }}' class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'>{{ $label }}</a>
            @endforeach
        </ul>
        </div>
    </nav>




