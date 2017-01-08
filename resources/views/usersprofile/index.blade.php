
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog | SloveIT</title>

    <!-- core CSS -->
    <link href="{{asset(url('css/bootstrap.min.css'))}}" rel="stylesheet">
    <link href="{{asset( url('css/font-awesome.min.css'))}}" rel="stylesheet">
    <link href="{{asset( url('css/prettyPhoto.css'))}}" rel="stylesheet">
    <link href="{{asset( url('css/animate.min.css'))}}" rel="stylesheet">
    <link href="{{asset( url('css/main.css'))}}" rel="stylesheet">
    <link href="{{asset( url('css/responsive.css'))}}" rel="stylesheet">
    <link href="{{asset( url('css/style.css'))}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset( url('js/html5shiv.js'))}}"></script>
    <script src="{{ asset( url('js/respond.min.js')) }}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<header id="header">


    <!--/ Navigation bar -->
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

                    @if (Auth::guest())
                        <li><a href="{{ url('login/') }}">Login</a></li>
                        <li><a href="{{ url('register/') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">

                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif


                </ul>
            </div>
        </div><!--/.container-->

    </nav>
 </header> <!--/header-->

<section id="" class="container bio">

    <div class="row ">

        <div class="col-sm-9">
            <div class="row">

                <div class="col-sm-3">

                    <img  class="img-responsive userimage" src="images/userphoto/new.jpg">
                    <label class="">User Name</label>
                </div>

                <div class="col-sm-9">
                    <div class="container">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#about">About</a></li>
                            <li><a data-toggle="tab" href="#post">Posts</a></li>
                            <li><a data-toggle="tab" href="#friend">Friends</a></li>
                            <li><a data-toggle="tab" href="#activity">Activity</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="about" class="tab-pane fade in active">
                                <h3>About</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div id="post" class="tab-pane fade">
                                <h3>Posts</h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div id="friend" class="tab-pane fade">
                                <h3>Friends</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                            <div id="activity" class="tab-pane fade">
                                <h3>Activity</h3>
                                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
 </section>
    <section id="" class="container">

    <div class="row">

        <div class="col-sm-2">


        </div>
        <div class="col-sm-1"></div>
        <div class="center col-sm-6">
            {{Form::open(array('action'=>'UsersProfileController@blogPost'))}}
            <div class="form-group">

                <textarea class="form-control" placeholder="What's on your mind?" rows="5" id="comment"></textarea>
                <button style="float: right;" class="btn btn-primary">Post</button>
            </div>



            {{Form::close()}}
        </div>
        <div class="col-sm-3"></div>
    </div>
    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date">07  NOV</span>
                                <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
                                <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                                <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-10 blog-content">
                            <a href="#"><img class="img-responsive img-blog" src="images/blog/blog1.jpg" width="100%" alt="" /></a>
                            <h2><a href="blog-item.html">Consequat bibendum quam liquam viverra</a></h2>
                            <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>
                            <a class="btn btn-primary readmore" href="blog-item.html">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!--/.blog-item-->

                <div class="blog-item">
                    <div class="row">
                        <div class="col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date">07  NOV</span>
                                <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
                                <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                                <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                            </div>
                        </div>
                        <div class="col-sm-10 blog-content">
                            <a href=""><img class="img-responsive img-blog" src="images/blog/blog2.jpg" width="100%" alt="" /></a>
                            <h2><a href="blog-item.html">Consequat bibendum quam liquam viverra</a></h2>
                            <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>
                            <a class="btn btn-primary readmore" href="blog-item.html">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!--/.blog-item-->

                <ul class="pagination pagination-lg">
                    <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                </ul><!--/.pagination-->
            </div><!--/.col-md-8-->

            <aside class="col-md-4">


                <div class="widget categories">
                    <h3>Recent Comments</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="single_comments">
                                <img src="images/blog/avatar3.png" alt=""  />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                <div class="entry-meta small muted">
                                    <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                </div>
                            </div>
                            <div class="single_comments">
                                <img src="images/blog/avatar3.png" alt=""  />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                <div class="entry-meta small muted">
                                    <span>By <a href="#">Alex</a></span> <span>On <a href="#">Creative</a></span>
                                </div>
                            </div>
                            <div class="single_comments">
                                <img src="images/blog/avatar3.png" alt=""  />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                <div class="entry-meta small muted">
                                    <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.recent comments-->


                <div class="widget categories">
                    <h3>Categories</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="blog_category">
                                <li><a href="#">Computers <span class="badge">04</span></a></li>
                                <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                <li><a href="#">Gedgets <span class="badge">06</span></a></li>
                                <li><a href="#">Technology <span class="badge">25</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--/.categories-->

                <div class="widget archieve">
                    <h3>Archieve</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="blog_archieve">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--/.archieve-->

                <div class="widget tags">
                    <h3>Tag Cloud</h3>
                    <ul class="tag-cloud">
                        <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
                    </ul>
                </div><!--/.tags-->

                <div class="widget blog_gallery">
                    <h3>Our Gallery</h3>
                    <ul class="sidebar-gallery">
                        <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
                    </ul>
                </div><!--/.blog_gallery-->
            </aside>
        </div><!--/.row-->
    </div>
</section><!--/#blog-->

<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">We are hiring</a></li>
                        <li><a href="#">Meet the team</a></li>
                        <li><a href="#">Copyright</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Refund policy</a></li>
                        <li><a href="#">Ticket system</a></li>
                        <li><a href="#">Billing system</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Developers</h3>
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">SEO Marketing</a></li>
                        <li><a href="#">Theme</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li><a href="#">Plugin Development</a></li>
                        <li><a href="#">Article Writing</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Our Partners</h3>
                    <ul>
                        <li><a href="#">Adipisicing Elit</a></li>
                        <li><a href="#">Eiusmod</a></li>
                        <li><a href="#">Tempor</a></li>
                        <li><a href="#">Veniam</a></li>
                        <li><a href="#">Exercitation</a></li>
                        <li><a href="#">Ullamco</a></li>
                        <li><a href="#">Laboris</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>
