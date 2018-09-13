<?php require_once('../config/db_connect.php');?>
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

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../js/morris-chart/morris.css">

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
    <style>
        .required,.error{
            color: red;
        }
    </style>
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="dashboard.php"><img src="../images/logo4.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="dashboard.php"><img src="../images/lo.png" alt=""></a>
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
                <li class="menu-list nav-active"><a href=""><i class="fa fa-lock"></i> <span>Administration</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="session">Voting Session</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-cog"></i> <span>System Management</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="schools">Schools</a></li>
                        <li><a href="departments">Departments</a></li>
                        <li><a href="add_admin">Add Admins</a></li>
                        <li><a href="add_student"> Add Students</a></li>
                        <li><a href="add_candidate"> Add Candidates</a></li>
                    </ul>
                </li>
                <li><a href="view_candidates"><i class="fa fa-users"></i> <span>Parliament Candidates</span></a></li>
                <li><a href="voting_progress"><i class="fa fa-bullhorn"></i> <span>Voting Progress</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-bell"></i> <span>Residents Progress</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="hall_one_progress"> Hall 1 Votes </a></li>
                        <li><a href="hall_two_progress"> Hall 2 Votes</a></li>
                        <li><a href="hall_three_progress"> Hall 3 Votes</a></li>
                        <li><a href="hall_4F_progress"> Hall 4Female Votes</a></li>
                        <li><a href="hall_4M_progress"> Hall 4Male Votes</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bell"></i> <span>Non Residents</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="non_resident_male"> Non Resident Male</a></li>
                        <li><a href="non_resident_female"> Non Resident Female</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bell"></i> <span>School Progress</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="sch_computing"> Sch. Computing</a></li>
                        <li><a href="sch_education"> Sch. Education</a></li>
                        <li><a href="sch_natural_sci"> Sch. Natural Sciences</a></li>
                        <li><a href="sch_engineering"> Sch. Engineering</a></li>
                        <li><a href="sch_nursing"> Sch. Nursing And MW</a></li>
                        <li><a href="sch_public_health"> Sch. Public Health </a></li>
                        <li><a href="sch_agriculture"> Sch. Agriculture </a></li>
                        <li><a href="sch_disaster"> Sch. Agriculture </a></li>
                        <li><a href="sch_sobe"> SOBE </a></li>
                        <li><a href="sch_medicine"> Sch. Medicine </a></li>
                        <li><a href="sch_arts"> Sch. Arts And Social Sci </a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>Parliamentarian Results</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="election_results"> Sch. Reps Election Results</a></li>
                        <li><a href="residence_results"> Residence Reps Election Results</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-users"></i> <span>SEC Candidates</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="sec_candidates"> View Candidates </a></li>
                        <li><a href="sec_voting_progress"> Voting Progress</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-money"></i> <span>Election Winners</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="parliament_winners"> Parliamentarian Seats</a></li>
                        <li><a href="sec_winners"> SEC Seats</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>REPORTS</span></a>
                <ul class="sub-menu-list">
                    <li><a href="election_resultspdf"> Election Report</a></li>
                    <li><a href="election_analysis">Election Analysis</a></li>
                 </ul>
                </li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>