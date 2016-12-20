<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class=""><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{ url('aboutus/')}}">About Us</a></li>
                <li><a href="{{ url('service/') }}">Services</a></li>
                <li><a href="{{ url('portfolio/') }}">Portfolio</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Blog Single</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="{{ url('pages/') }}">404</a></li>
                        <li><a href="#">Shortcodes</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('blog/')}}">Blog</a></li>
                <li><a href="{{ url('contact/') }}">Contact</a></li>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->