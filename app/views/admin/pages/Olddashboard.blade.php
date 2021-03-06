<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nex Law CMS</title>

    <link rel="stylesheet" href="{{URL::to('css/admin.css')}}"/>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Nex Law CMS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li >
                    <a href="{{ url('dashboard') }}">Blog <b ></b></a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('users') }}">Add new Users</a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->email }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('logout') }}">Logout</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Add New Post in Website
            </h1>
        </div>
        <form  role="form" method="POST" action="{{ url('/add/blog') }}">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="title" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Post Title">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control" name="image" id="exampleInputPassword1" placeholder="Image">
            </div>
                </div>
            <div class="col-lg-12">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleTextarea">Content</label>
                        <textarea class="form-control" name="content" id="editor1" rows="8"></textarea>
                    </div>
                </div>
                </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

            </form>

    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Post Lists</h2>
        </div>
        <div class="row">
        <div class="col-md-12">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{($blog->title)}}</td>
                        <td>{{($blog->created_at)}}</td>
                        <td>{{($blog->updated_at)}}</td>

                        <td> <a href="{{ URL::to('show/blog/' . $blog->id) }}"> <button >Edit</button></a>
                            <a href="{{ URL::to('delete/blog/' . $blog->id) }}"> <button >Delete</button></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
            </div>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>




</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{URL::to('/js/admin.js')}}" type="text/javascript"></script>

    <script src="//cdn.ckeditor.com/4.6.1/basic/ckeditor.js"></script>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

</body>

</html>
