<?php
session_start();
require_once('config/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
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
if(isset($_POST['login'])){
    $regno=trim($_POST['regno']);
    $password=trim($_POST['password']);

    $q=$conn->query("SELECT * FROM students WHERE reg_number='$regno' AND password='$password' AND session_id='2'");
    $r=$q->fetch_array();
    $c=$q->num_rows;
    if($c==1){
        echo"<script>window.location.href='session_closed'</script>";
    }
    else{
        $query=$conn->query("SELECT * FROM students WHERE reg_number='$regno' AND password='$password'");
        $row=$query->fetch_array();
        $count=$query->num_rows;

        if($count==1){
        if($row['status']==0){
            echo"<script>window.location.href='activate_account'</script>";
        }
            else{
            if($row['role_id']==2){
                $_SESSION['students']=$row['reg_number'];
                $_SESSION['role_session']=$row['role_id'];
                echo"<script>window.location.href='students/dashboard'</script>";
            }
            elseif($row['role_id']==3){
                $_SESSION['sec_elections']=$row['reg_number'];
                $_SESSION['role_session']=$row['role_id'];
                echo"<script>window.location.href='sec_elections/dashboard'</script>";
            }
            elseif($row['role_id']==1){
                $_SESSION['admin']=$row['reg_number'];
                $_SESSION['role_session']=$row['role_id'];
                echo"<script>window.location.href='admin/dashboard'</script>";
            }
            else{

            }
            }
        }
    }

}
?>
    <form id="students" class="form-signin" method="post" action="">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Sign In</h1>
            <img style="width: 140px; height: 118px;" src="images/logo1.png" alt=""/>
        </div>
        <div class="login-wrap">
            <input type="text" id="regno" name="regno" class="form-control" placeholder="Registration Number" autofocus>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">

            <button class="btn btn-lg btn-login btn-block" name="login" type="submit"><i class="fa fa-check"></i>Login</button>
            <a href="index" class="btn back-btn btn-info" style="color: white;"><i class="fa fa-backward"></i> Back</a>

            <div class="registration">
                Forgot Password?
                <a class="" href="reset_pass">
                    Reset Here
                </a>
            </div>
            <!--<label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>-->

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

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
