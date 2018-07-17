<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/').(Auth::check()?'/home':'') }}"><i class="fa fa-home"></i>
        {{ config('app.name', 'SmartFridge') }}
    </a>
    <div class="navbar-nav ml-auto">

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <!-- Authentication Links -->
            @if (!Auth::guest())

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}  {{ Auth::user()->famname }}<span class="caret"></span>
                    </a>
                    <!-- Bugfix Bootstrap -->
                    <ul class="dropdown-menu" style="left: -100%;" role="menu">
                        <li class="dropdown-item custom-navbar-dropdown-item">
                            <a href="{{ route('logout') }}" class="custom-navbar-dropdown-link"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                Ausloggen
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>