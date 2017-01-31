<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emirates Graphic CMS</title>
    <!-- Tab Logo -->
    <link rel="icon" href="img/es_logo.png">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::to('js/vendor/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/vendor/metisMenu/metisMenu.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('js/dist/css/sb-admin-2.css')}}"/>

    <link rel="stylesheet" href="{{URL::to('js/vendor/font-awesome/css/font-awesome.min.css')}}"/>

    <!-- Navigationbar Style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/navigavbar-style.css')}}"/>


    <!-- Main style -->
    <link rel="stylesheet" href="{{URL::to('js/dist/css/blog-page.css')}}"/>



</head>

<body>

    <div id="wrapper">

<!-- Navigation Bar  -->

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-top-buttons navbar-left">
                <li>
                    <p class="choose_page-p">Chose Page</p>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle btn-info" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Homepage <span class="fa fa-angle-down"></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Page 1</a>
                            <a class="dropdown-item" href="#">Page 2</a>
                        </div>
                    </div>
                </li>
                <li>
                    <button type="button" class="btn btn-danger">
                        View Website
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-success">
                        Publish
                    </button>
                </li>
            </ul>


            <ul class="nav navbar-top-links navbar-right navigation-logo-brand">
                <img src="../img/emirates-logo-01.png">
            </ul>

            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ url('blog') }}"><i class="fa fa-clipboard"></i> Blog Posts</a>
                        </li>
                        <li>
                            <a href="{{ url('cover') }}"><i class="fa fa-picture-o"></i> Cover Image</a>
                        </li>
                        <li>
                            <a href="gallery"><i class="fa fa-file-image-o"></i> Gallery</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-columns"></i> Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="home-page">Homepage</a>
                                </li>
                                <li>
                                    <a href="about-page">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Services (no page)</a>
                                </li>
                                <li>
                                    <a href="#">Our Work (no page)</a>
                                </li>
                                <li>
                                    <a href="#">Contacts (no page)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="email-configuration"><i class="fa fa-envelope-o"></i> Email Configuration</a>
                        </li>
                        <li>
                            <a href="login"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


<!-- End Of navigationbar  -->


        <!-- Page Content -->
        <div id="page-wrapper" class="blog-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 blog_page_content" style="text-align: center;">
                        <img src="../img/big_logo-01.png" style="width: 450px; margin: auto !important; padding: 50px 0px;" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="{{URL::to('/js/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/vendor/metisMenu/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('/js/dist/js/sb-admin-2.js')}}" type="text/javascript"></script>

</body>

</html>
