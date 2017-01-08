<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class=""><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{ url('blogabout/')}}">About Blog</a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('login/') }}">Login</a></li>
                    <li><a href="{{ url('register/') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/usersprofile') }}"><i class="fa fa-btn fa-sign-out"></i>Profile</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Blog Single</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="{{ url('pages/') }}">404</a></li>
                        <li><a href="#">Shortcodes</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->