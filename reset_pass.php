<?php
session_start();
require_once('config/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/logo1.png" type="image/png">

    <title>MMUST SmartVoter|User_Login</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        .required,.error{
            color: red;
        }
    </style>
</head>

<body style="background-color: #B0C4DE;">
<div class="container-fluid" style="background-color:#4682B4">
    <div class="row">
        <div class="col-md-12">
            <h1 STYLE="color: white; font-family:  font-family: Georgia, serif; font-size: 40px; font-weight: 600; text-align: center;">MMUST Elections Portal</h1>
        </div>
    </div>
</div>
<div class="container">
    <?php
    if(isset($_POST['pass'])){
        //$regno=$_POST['regno'];
    }
    ?>
    <form id="students" class="form-signin" method="post" action="">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Recover Password</h1>
            <img style="width: 140px; height: 118px;" src="images/logo1.png" alt=""/>
        </div>
        <div class="login-wrap">
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address" autofocus></br>
            <button class="form-control btn-info " name="pass" type="submit"><i class="fa fa-check"></i>Reset Password</button></br>
            <a href="login" class="btn back-btn btn-info" style="color: white;"><i class="fa fa-backward"></i> Back</a>

        </div>

    </form>

</div>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/additional-methods.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/student_validator.js"></script>

</body>
</html>
