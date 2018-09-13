<?php require_once('config/db_connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/logo1.png" type="image/png">

    <title>MMUST SmartVoter System</title>

    <!--icheck-->
    <link href="js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
    <link href="js/iCheck/skins/square/square.css" rel="stylesheet">
    <link href="js/iCheck/skins/square/red.css" rel="stylesheet">
    <link href="js/iCheck/skins/square/blue.css" rel="stylesheet">

    <!--dynamic table-->
    <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="js/morris-chart/morris.css">

    <!--dashboard calendar-->
    <link href="css/clndr.css" rel="stylesheet">

    <!--common-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
<div class="container-fluid" style="background-color:#4682B4">
    <div class="row">
        <div class="col-md-12">
            <h1 STYLE="color: white; font-family:  font-family: Georgia, serif; font-size: 40px; font-weight: 600; text-align: center;">MMUST Elections Public Portal</h1>
        </div>
    </div>
</div>
<section>

<!-- main content start-->
<div class="container" >

<div class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading custom-tab blue-tab">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#computing" data-toggle="tab">Computing</a>
                        </li>
                        <li class="">
                            <a href="#education" data-toggle="tab">Education</a>
                        </li>
                        <li class="">
                            <a href="#engineering" data-toggle="tab">Engineering</a>
                        </li>
                        <li class="">
                            <a href="#medicine" data-toggle="tab">Medicine</a>
                        </li>
                        <li class="">
                            <a href="#natural_sciences" data-toggle="tab">Natural Sciences</a>
                        </li>
                        <li class="">
                            <a href="#nursing" data-toggle="tab">Nursing</a>
                        </li>
                        <li class="">
                            <a href="#public_health" data-toggle="tab">Public Health</a>
                        </li>
                        <li class="">
                            <a href="#sobe" data-toggle="tab">SOBE</a>
                        </li>
                        <li class="">
                            <a href="#agriculture" data-toggle="tab">Agriculture</a>
                        </li>
                        <li class="">
                            <a href="#arts" data-toggle="tab">sch. ARTS</a>
                        </li>
                        <li class="">
                            <a href="#disaster" data-toggle="tab">Disaster management</a>
                        </li>
                        <li class="">
                            <a href="#hall_one" data-toggle="tab">hall one</a>
                        </li>
                        <li class="">
                            <a href="#hall_two" data-toggle="tab">hall two</a>
                        </li>
                        <li class="">
                            <a href="#hall_three" data-toggle="tab">hall three</a>
                        </li>
                        <li class="">
                            <a href="#hall_four" data-toggle="tab">hall four</a>
                        </li>
                        <li class="">
                            <a href="#non_residents" data-toggle="tab">non residents</a>
                        </li>
                        <li class="">
                            <a href="#sec_progress" data-toggle="tab">sec voting progress</a>
                        </li>

                    </ul>
                </header>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane" id="sec_progress">

                            <!--S T A R T    O F   SEC  VOTING  PROGRESS  -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SEC VOTING PROGRESS
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT * FROM sec_progress";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['votes']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="hall_one">

                            <!--S T A R T    O F   HALL ONE     W I N N E R -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            HALL ONE REPRESENTATIVES
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.school_id,votes.position_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=10

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--S T A R T   O F   HALL TWO     W I N N E R -->
                        <div class="tab-pane" id="hall_two">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            HALL TWO REPRESENTATIVES
                                            <span class="tools pull-right">
                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.school_id,votes.position_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=11

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--S T A R T   O F  HALL THREE     W I N N E R S-->
                        <div class="tab-pane" id="hall_three">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                             HALL THREE REPRESENTATIVES
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.school_id,votes.position_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=12

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- S T A R T     HALL FOUR    W I N N E R S-->
                        <div class="tab-pane" id="hall_four">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                           HALL FOUR MALE REPRESENTATIVES
                                            <span class="tools pull-right">
                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.school_id,votes.position_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=13

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC ";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            HALL FOUR FEMALE RESPRESENTATIVES
                                            <span class="tools pull-right">
                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.school_id,votes.position_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=14

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--START  NON RESIDENTS     W I N N E R S-->
                        <div class="tab-pane" id="non_residents">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            NON-RESIDENT MALE REPRESENTATIVES
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.school_id,votes.position_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=15

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            NON-RESIDENT FEMALE REPRESENTATIVES
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.school_id,votes.position_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=16

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane active" id="computing">

                            <!--S T A R T   OF  S C H O O L   O F   C O M P U T I N G     W I N N E R S-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF COMPUTING AND INFORMATICS: MALE REPS
                                                            <span class="tools pull-right">
                                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        //test is a view
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=11

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF COMPUTING AND INFORMATICS: FEMALE REPS
                                                            <span class="tools pull-right">
                                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.reg_number=students.reg_number AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=11

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--   E N D   S C H O O L   O F   C O M P U T I N G     W I N N E R S     -->


                        <!--S T A R T O F   S C H O O L   O F   E D U C A T I O N     W I N N E R S-->
                        <div class="tab-pane" id="education">

                            <!--body wrapper start-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF EDUCATION: MALE REPS
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=2

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF EDUCATION: FEMALE REPS
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=2

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--E N D   S C H O O L   O F   E D U C A T I O N     W I N N E R S-->


                        <!--S T A R T O F  S C H O O L   O F   E N G I N E E R I N G     W I N N E R S-->
                        <div class="tab-pane" id="engineering">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF ENGINEERING: MALE REPS
                                                    <span class="tools pull-right">
                                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                     </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=4

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>

                            <!--END  O F  S C H O O L   O F   E N G I N E E R I N G  MALE   W I N N E R S-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF ENGINEERING: FEMALE REPS
                                                    <span class="tools pull-right">
                                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                     </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=4

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END  O F  S C H O O L   O F   E N G I N E E R I N G     W I N N E R S-->

                        <!-- S T A R T     O F  S C H O O L   O F   M E D I C I N E     W I N N E R S-->
                        <div class="tab-pane" id="medicine">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF MEDICINE: MALE REPEPRESENTATIVES
                                            <span class="tools pull-right">
                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=12

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END  O F  S C H O O L   O F   MEDICINE MALE    W I N N E R S-->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF MEDICINE: FEMALE REPRESENTATIVE
                                            <span class="tools pull-right">
                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=12

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="natural_sciences">
                            <!--START  O F  S C H O O L   O F   NATURAL SCIENCES    W I N N E R S-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF NATURAL SCIENCES: MALE REPS
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=2

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF NATURAL SCIENCES: FEMALE REPS
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=2

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END  O F  S C H O O L   O F   NATURAL SCIENCES    W I N N E R S-->
                        <div class="tab-pane" id="nursing">
                            <!--START  O F  S C H O O L   O F   NURSING    W I N N E R S-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF NURSING AND MIDWIFRY: MALE REPRESENTATIVE
                                            <span class="tools pull-right">
                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=5

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF NURSING AND MIDWWIFRY: FEMALE REPRESENTATIVE
                                            <span class="tools pull-right">
                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=5

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END  O F  S C H O O L   O F   NURSING    W I N N E R S-->

                        <div class="tab-pane" id="public_health">
                            <!--START  O F  S C H O O L   O F   PUBLIC HEALTH    W I N N E R S-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF PUBLIC HEALTH, BIOMEDICAL SCIENCES: MALE REP
                                            <span class="tools pull-right">
                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=6

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF PUBLIC HEALTH, BIOMEDICAL SCIENCES: FEMALE REP
                                            <span class="tools pull-right">
                                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                             </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=6

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END  O F  S C H O O L   O F   PUBLIC HEALTH    W I N N E R S-->


                        <!--START  O F  S C H O O L   O F   SOBE    W I N N E R S-->
                        <div class="tab-pane" id="sobe">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL BUSINESS AND ECONOMICS: MALE REP
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=9

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF BUSINESS AND ECONOMICS: FEMALE REP
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=9

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END  O F  S C H O O L   O F   SOBE    W I N N E R S-->


                        <!--END  O F  SCHOOL OF AGRICULTURE AND VEETERINARY SCIENCES    W I N N E R S-->
                        <div class="tab-pane" id="agriculture">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF AGRICULTURE AND VETERINARY SCIENCES: MALE REP
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=7

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF AGRICULTURE AND VEETERINARY SCIENCES: FEMALE REP
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=7

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END  O F  SCHOOL OF AGRICULTURE AND VEETERINARY SCIENCES    W I N N E R S-->

                        <!--START  O F  SCHOOL OF ARTS AND SOCIAL SCIENCES    W I N N E R S-->
                        <div class="tab-pane" id="arts">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF ARTS AND SOCIAL SCIENCES: MALE REP
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=13

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF ARTS AND SOCIAL SCIENCES: FEMALE REP
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=13

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END  O F  SCHOOL OF ARTS AND SOCIAL SCIENCES    W I N N E R S-->


                        <!--END  O F  SCHOOL OF DISASTER MANAGEMENT AND HUMANITARIAN ASSISTANCE    W I N N E R S-->
                        <div class="tab-pane" id="disaster">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF DISASTER MANAGEMENT AND HUMANITARIAN ASSISTANCE: MALE REP
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=8 AND votes.school_id=8

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-primary">
                                        <header class="panel-heading">
                                            SCHOOL OF DISASTER MANAGEMENT AND HUMANITARIAN ASSISTANCE: FEMALE REP
                                                <span class="tools pull-right">
                                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                                 </span>
                                        </header>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="">
                                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Passport</th>
                                                            <th>Reg Number</th>
                                                            <th>Full Name</th>
                                                            <th>School Name</th>
                                                            <th>Position</th>
                                                            <th>Total Votes</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $s="SELECT candidates.*, students.*, schools.*,positions.*,votes.candidate_id,votes.position_id,votes.school_id,
                                                         COUNT(votes.candidate_id) AS kura
                                                        FROM students,schools,candidates,positions,votes WHERE
                                                        candidates.candidate_id=votes.candidate_id AND
                                                        candidates.position = positions.position_id AND
                                                        students.reg_number = candidates.reg_number AND
                                                        students.school_id = schools.school_id    AND
                                                        votes.position_id=9 AND votes.school_id=8

                                                        GROUP BY votes.candidate_id
                                                        ORDER BY kura DESC";
                                                        $q=mysqli_query($conn,$s);
                                                        $count=1;
                                                        while($r=mysqli_fetch_assoc($q)) {
                                                            ?>
                                                            <tr class="gradeA">
                                                                <td><?php echo $count; ?></td>
                                                                <td><img src="<?php echo "uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                                                <td><?php echo $r['reg_number']?></td>
                                                                <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                                                <td><?php echo $r['school_name']?></td>
                                                                <td><?php echo $r['position_name']?></td>
                                                                <td><?php echo $r['kura']?> Votes</td>
                                                            </tr>
                                                            <?php
                                                            $count++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END  O F  SCHOOL OF DISASTER MANAGEMENT AND HUMANITARIAN ASSISTANCE    W I N N E R S-->
                    </div>
                    <!--END  O F  TAB PANE FOR WINNERS DISPLAY-->
                </div>
            </section>

        </div>
    </div>

</div>
<!--body wrapper end-->

<!--footer section start-->
<!--<footer class="sticky-footer">-->
<!--    <strong>2017 &copy; MMUST SMARTVOTER SYSTEM</strong>-->
<!--</footer>-->
<!--footer section end-->
</div>
<!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
