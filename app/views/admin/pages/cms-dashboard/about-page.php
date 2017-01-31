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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Navigationbar Style -->
    <link rel="stylesheet" type="text/css" href="../dist/css/navigavbar-style.css">

    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="../dist/css/about.css">

</head>

<body>

    <div id="wrapper">

<!-- Navigation Bar  -->

<?php
    include('nav.php');
?>

<!-- End Of navigationbar  -->


        <!-- Page Content -->
        <div id="page-wrapper" class="about-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 about_page_content">
                        <div class="col-md-5">
                            <p>Edit About Us</p>
                            <textarea rows="10" placeholder="Edit content"></textarea>
                            <div class="col-md-12 no-padding">
                                <p>Edit Testimonias</p>
                                <div class="col-md-6 about_input_input">
                                    <input placeholder="Client Name" name="">
                                </div>
                                <div class="col-md-6 about_input_btn">
                                    <label class="btn btn-default btn-file">
                                       <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp; Add Client Image <input type="file" style="display: none;">
                                    </label>
                                </div>

                            <textarea rows="5" placeholder="Testimonials"></textarea>    
                            </div>
                        </div>
                        <div class="col-md-5 location_social_media">
                            <p>Edit Location</p>
                            <input placeholder="Add Location" name="">
                            <p>Edit Location</p>
                            <input placeholder="Add Location" name="">
                            <p>Link Social Media</p>
                            <a href=#><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            <a href=#><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=#><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
