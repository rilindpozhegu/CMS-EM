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
    <link rel="stylesheet" href="{{URL::to('js/dist/css/cover-page.css')}}"/>



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
                        <a href="blog"><i class="fa fa-clipboard"></i> Blog Posts</a>
                    </li>
                    <li>
                        <a href="cover"><i class="fa fa-picture-o"></i> Cover Image</a>
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
                        <a href="{{url('logout')}}"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- End Of navigationbar  -->


        <!-- Page Content -->
        <div id="page-wrapper" class="cover-wrapper">
            <div class="container">
                <div class="kv-main col-md-4">
                <p>Upload Cover Photo:</p>
                    <div class="page-header">
                    </div>

                    {{Form::open(array('url' => 'cover/cover', 'method' => 'post', 'files' => true))}}

                    <label class="btn btn-default btn-file">
                        <i class="fa fa-image" aria-hidden="true"></i>&nbsp; Edit Cover <input type="file" name="image" style="display: none;">
                    </label>
                    <button class="edit_btn"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    {{Form::close()}}

                    <div class="image_section">
                        @foreach($cover as $cv)
                        <div class="image_edit_panel">
                            <img src="{{URL::to('uploads/'. $cv->image)}}" alt="..." class="..">
                            <button class="edit_btn"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                            <a href="{{ URL::to('cover/delete/' . $cv->id) }}"><button class="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="kv-main col-md-4">
                <p>Upload Logo:</p>
                    <div class="page-header">
                    </div>
                    {{Form::open(array('url' => 'cover/logo', 'method' => 'post', 'files' => true))}}

                    <label class="btn btn-default btn-file">
                        <i class="fa fa-image" aria-hidden="true"></i>&nbsp; Edit Logo <input type="file" name="image" style="display: none;">
                    </label>
                    <button class="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    {{Form::close()}}

                    <div class="image_section">
                        @foreach($logo as $lg)
                            <div class="image_edit_panel">
                                <img src="{{URL::to('uploads/'. $lg->image)}}" alt="..." class="..">
                                <button class="edit_btn"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <a href="{{ URL::to('cover/delete/' . $lg->id) }}"><button class="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="kv-main col-md-4">
                <p>Upload Flaticon:</p>
                    <div class="page-header">
                    </div>
                    {{Form::open(array('url' => 'cover/flaticon', 'method' => 'post', 'files' => true))}}

                    <label class="btn btn-default btn-file">
                        <i class="fa fa-image" aria-hidden="true"></i>&nbsp; Edit Flaticon <input type="file" name="image" style="display: none;">
                    </label>
                    <button class="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    {{Form::close()}}

                    <div class="image_section">
                        @foreach($flaticon as $fl)
                            <div class="image_edit_panel">
                                <img src="{{URL::to('uploads/'. $fl->image)}}" alt="..." class="..">
                                <button class="edit_btn"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <a href="{{ URL::to('cover/delete/' . $fl->id) }}"><button class="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>




    </div>    


    <!-- <script type="text/javascript" src="../dist/upload-image.js"></script> -->

<!-- jQuery -->
<script src="{{URL::to('/js/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/vendor/metisMenu/metisMenu.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/dist/js/sb-admin-2.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{URL::to('/js/dist/js/upload-image.js')}}"></script>
<script type="text/javascript" src="{{URL::to('/js/dist/js/fileinput.js')}}"></script>

</body>

</html>

