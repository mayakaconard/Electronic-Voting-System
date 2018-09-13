<?php require_once('../config/db_connect.php');
session_start();
$role=$_SESSION['role_session'];
if(!isset($_SESSION['sec_elections'])&& $role!=3){
    echo"<script>window.location.href='../index'</script>";
}
else{
    $session_id=$_SESSION['sec_elections'] ;
    $query=$conn->query("SELECT * FROM students,residency,schools WHERE students.reg_number='$session_id'
    AND residency.residence_id=students.residence_id
    AND schools.school_id=students.school_id");
    $row=$query->fetch_array();
    $count=$query->num_rows;
    $fname=$row['fname'];
    $lname=$row['lname'];
    $school=$row['school_id'];
    $reg=$row['reg_number'];
    $reside=$row['residence_id'];
    $reside_name=$row['residence_name'];
    $sch_name=$row['school_name'];
    $fullname=$fname.' '.$lname;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="../images/logo1.png" type="image/png">

    <title>MMUST SmartVoter System</title>

    <!--icheck-->
    <link href="../js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
    <link href="../js/iCheck/skins/square/square.css" rel="stylesheet">
    <link href="../js/iCheck/skins/square/red.css" rel="stylesheet">
    <link href="../js/iCheck/skins/square/blue.css" rel="stylesheet">

    <!--dynamic table-->
    <link href="../js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="../js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="../js/data-tables/DT_bootstrap.css" />

    <!--dashboard calendar-->
    <link href="../css/clndr.css" rel="stylesheet">


    <!--common-->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">

    <!--bootstrap
    <link href="../css/bootstrap.min.css" rel="stylesheet">-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="dashboard"><img src="../images/logo4.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="dashboard"><img src="../images/lo.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="../images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li class="menu-list active"><a href=""><i class="fa fa-users"></i> <span>SEC Positions</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="mmuso_president"> MMUSO President </a></li>
                        <li><a href="sec_gen"> Secretary General</a></li>
                        <li><a href="academic_sec"> Academic Secretary </a></li>
                        <li><a href="treasurer"> Treasurer</a></li>
                        <li><a href="special_interest"> Special Interest Secretary </a></li>
                        <li><a href="sports_sec"> Sports and Entertainment</a></li>
                    </ul>
                </li>

            </ul>
            <!--sidebar nav end-->
        </div>
    </div>