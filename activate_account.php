<?php require_once('config/db_connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Registration</title>

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

<body class=""style="background-color: #B0C4DE;">

<div class="container">
<?php
if(isset($_POST['send'])){
    $reg=$_POST['regno'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $code = md5(uniqid(rand()));
    $joining_date =date('Y-m-d H:i:s');
    $server= $_SERVER['SERVER_NAME'];

    $stmt="UPDATE students SET password='$pass', status=1 WHERE reg_number='$reg' AND email='$email'";
    if(mysqli_query($conn,$stmt)){
        $sql=$conn->query("SELECT * FROM students WHERE reg_number='$reg'");
        $query=mysqli_fetch_assoc($sql);
        $fname=$query['fname'];
        $lname=$query['lname'];
        $fullname=$fname.' '.$lname;
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $message='Dear '.$fullname.',Welcome to MMUST Smartvoter System. <br/>
                                  Kindly activate your account by clicking on the link below:<br/>
                                  <a href="http://'.$server.'/smartvoter/login?code='.$code.'"><u>Click on the link below to activate.</u></a><br/><br/>
                                   Your Vote Your Right! Your Fututre!!
                                  ';
        $mail->Mailer = "smtp";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = 'rigallitoh@gmail.com';
        $mail->Password = 'Jevanjee04';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('rigallitoh@gmail.com', 'MMUST SMARTVOTER SYSTEM ');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Account Activation';
        $mail->Body = $message;
        if ($mail->send()) {
            echo "<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button></strong>Success!</strong>  Activation link has been sent to $email.
                                    Please click to activate your account. </div>";
        }
        else{
            echo "<div class='alert alert-danger'>
                            <button class='close' data-dismiss='alert'>&times;</button><strong>Sorry !</strong> Query could not be executed
                    </div>";
        }
        /*echo"<div class='alert alert-success'>
        <button class='close' data-dismiss='alert'>&times;</button>Account successfully activated. Kindly login with your new password.
        </div>";*/
    }
    else{
        echo"<div class='alert alert-warning'>
        <button class='close' data-dismiss='alert'>&times;</button>Failed!!. Kindly check connectivity and try again later.
        </div>";
    }
}
?>
    <form id="students" class="form-signin" method="post" action="" style="margin-top: 50px;">
        <div class="form-signin-heading text-center">
            <!--<h1 class="sign-title">Registration</h1>-->
            <img style="width: 140px; height: 118px;" src="images/logo1.png" alt=""/>
        </div>

        <div class="login-wrap">
            <p>Reset password</p>

            <input type="text" id="regno" autofocus="" placeholder="Enter Reg Number" class="form-control" name="regno">
            <input type="text" placeholder="Enter Email" class="form-control" name="email" id="email">
            <input type="password" placeholder="New Password" class="form-control" name="pass">
            <input type="password" placeholder="Confirm Password" class="form-control">
            <button type="submit" name="send" class="btn btn-lg btn-login btn-block"><i class="fa fa-check"></i> Register</button>

            <div class="registration">
                <a href="login.php" class="btn btn-info" style="color: white;">
                    Login
                </a>
            </div>

        </div>

    </form>

</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/additional-methods.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/student_validator.js"></script>

</body>
</html>
