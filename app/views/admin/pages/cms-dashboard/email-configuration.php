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
    <link rel="stylesheet" type="text/css" href="../dist/css/email-config.css">

</head>

<body>

    <div id="wrapper">

<!-- Navigation Bar  -->

<?php
    include('nav.php');
?>

<!-- End Of navigationbar  -->


        <!-- Page Content -->
        <div id="page-wrapper" class="email-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 email_page_content">
                        <p>Email Configuration</p>
                        <input type="email" name="" placeholder="Add Email">
                        <select>
                          <option value="volvo">Gmail</option>
                          <option value="saab">Yahoo</option>
                          <option value="opel">Hotmail</option>
                        </select>
                        <input type="password" name="" placeholder="Password">
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
