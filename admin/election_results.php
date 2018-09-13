<?php require_once('include/side_bar.php')?>
    <!-- left side end-->
    
    <!-- main content start-->
<?php require_once('include/header1.php')?>

        <!-- page heading start-->
        <div class="page-heading">
            <ul class="breadcrumb">
                <li>
                    <a href="dashboard">Dashboard</a>
                </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
<?php
//$elect=$conn->query("SELECT * FROM students WHERE session_id=2");
//$row_elect=$elect->fetch_array();
//$count_elect=$elect->num_rows;
//if($count_elect==1){
//    echo"<script>window.location.href='noresults'</script>";
//}
//else{}
//?>
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


                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="computing">

                                     <!--S T A R T   OF  S C H O O L   O F   C O M P U T I N G     W I N N E R S-->
                                     <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel panel-primary">
                                                    <header class="panel-heading">
                                                        LIST OF WINNERS: SCHOOL OF COMPUTING AND INFORMATICS: MALE REPS
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
                                                                       $s="SELECT * FROM sch_com_male";
                                                                        $q=mysqli_query($conn,$s);
                                                                        $count=1;
                                                                        while($r=mysqli_fetch_assoc($q)) {
                                                                            ?>
                                                                            <tr class="gradeA">
                                                                                <td><?php echo $count; ?></td>
                                                                                <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                            LIST OF WINNERS: SCHOOL OF COMPUTING AND INFORMATICS: FEMALE REPS
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
                                                                   $s="SELECT * FROM sch_com_female";
                                                                    $q=mysqli_query($conn,$s);
                                                                    $count=1;
                                                                    while($r=mysqli_fetch_assoc($q)) {
                                                                        ?>
                                                                        <tr class="gradeA">
                                                                            <td><?php echo $count; ?></td>
                                                                            <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        LIST OF WINNERS: SCHOOL OF EDUCATION: MALE REPS
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
                                                               $s="SELECT * FROM sch_edu_male";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        LIST OF WINNERS: SCHOOL OF EDUCATION: FEMALE REPS
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
                                                               $s="SELECT * FROM sch_edu_female";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                            LIST OF WINNERS: SCHOOL OF ENGINEERING: MALE REPS
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
                                                                   $s="SELECT * FROM sch_engi_male";
                                                                    $q=mysqli_query($conn,$s);
                                                                    $count=1;
                                                                    while($r=mysqli_fetch_assoc($q)) {
                                                                        ?>
                                                                        <tr class="gradeA">
                                                                            <td><?php echo $count; ?></td>
                                                                            <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                            LIST OF WINNERS: SCHOOL OF ENGINEERING: FEMALE REPS
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
                                                                   $s="SELECT * FROM sch_engi_female";
                                                                    $q=mysqli_query($conn,$s);
                                                                    $count=1;
                                                                    while($r=mysqli_fetch_assoc($q)) {
                                                                        ?>
                                                                        <tr class="gradeA">
                                                                            <td><?php echo $count; ?></td>
                                                                            <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                    WINNER: SCHOOL OF MEDICINE: MALE REPEPRESENTATIVE
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
                                                           $s="SELECT * FROM sch_med_male";
                                                            $q=mysqli_query($conn,$s);
                                                            $count=1;
                                                            while($r=mysqli_fetch_assoc($q)) {
                                                                ?>
                                                                <tr class="gradeA">
                                                                    <td><?php echo $count; ?></td>
                                                                    <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                    WINNER: SCHOOL OF MEDICINE: FEMALE REPRESENTATIVE
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
                                                           $s="SELECT * FROM sch_med_female";
                                                            $q=mysqli_query($conn,$s);
                                                            $count=1;
                                                            while($r=mysqli_fetch_assoc($q)) {
                                                                ?>
                                                                <tr class="gradeA">
                                                                    <td><?php echo $count; ?></td>
                                                                    <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        Votes Per Candidate: SCHOOL OF NATURAL SCIENCES: MALE REPS
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
                                                               $s="SELECT * FROM sch_natul_male";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        Votes Per Candidate: SCHOOL OF NATURAL SCIENCES: FEMALE REPS
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
                                                               $s="SELECT * FROM sch_natul_female";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                    WINNER: SCHOOL OF NURSING AND MIDWIFRY: MALE REPRESENTATIVE
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
                                                           $s="SELECT * FROM sch_nurs_male";
                                                            $q=mysqli_query($conn,$s);
                                                            $count=1;
                                                            while($r=mysqli_fetch_assoc($q)) {
                                                                ?>
                                                                <tr class="gradeA">
                                                                    <td><?php echo $count; ?></td>
                                                                    <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                    WINNER: SCHOOL OF NURSING AND MIDWWIFRY: FEMALE REPRESENTATIVE
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
                                                           $s="SELECT * FROM sch_nurs_female";
                                                            $q=mysqli_query($conn,$s);
                                                            $count=1;
                                                            while($r=mysqli_fetch_assoc($q)) {
                                                                ?>
                                                                <tr class="gradeA">
                                                                    <td><?php echo $count; ?></td>
                                                                    <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                    WINNER: SCHOOL OF PUBLIC HEALTH, BIOMEDICAL SCIENCES: MALE REP
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
                                                           $s="SELECT * FROM sch_pub_male";
                                                            $q=mysqli_query($conn,$s);
                                                            $count=1;
                                                            while($r=mysqli_fetch_assoc($q)) {
                                                                ?>
                                                                <tr class="gradeA">
                                                                    <td><?php echo $count; ?></td>
                                                                    <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                    Votes Per Candidate: SCHOOL OF PUBLIC HEALTH, BIOMEDICAL SCIENCES: FEMALE REP
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
                                                           $s="SELECT * FROM sch_pub_female";
                                                            $q=mysqli_query($conn,$s);
                                                            $count=1;
                                                            while($r=mysqli_fetch_assoc($q)) {
                                                                ?>
                                                                <tr class="gradeA">
                                                                    <td><?php echo $count; ?></td>
                                                                    <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        WINNER: SCHOOL BUSINESS AND ECONOMICS: MALE REP
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
                                                               $s="SELECT * FROM sobe_male";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        WINNER: SCHOOL OF BUSINESS AND ECONOMICS: FEMALE REP
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
                                                               $s="SELECT * FROM sobe_female";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        WINNER: SCHOOL OF AGRICULTURE AND VETERINARY SCIENCES: MALE REP
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
                                                               $s="SELECT * FROM sch_agri_male";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        WINNER: SCHOOL OF AGRICULTURE AND VEETERINARY SCIENCES: FEMALE REP
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
                                                               $s="SELECT * FROM sch_agri_female";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        WINNERS: SCHOOL OF ARTS AND SOCIAL SCIENCES: MALE REP
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
                                                               $s="SELECT * FROM sch_arts_male";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        WINNER: SCHOOL OF ARTS AND SOCIAL SCIENCES: FEMALE REP
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
                                                               $s="SELECT * FROM sch_arts_female";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        WINNER: SCHOOL OF DISASTER MANAGEMENT AND HUMANITARIAN ASSISTANCE: MALE REP
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
                                                               $s="SELECT * FROM sch_disa_male";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
                                                        WINNER: SCHOOL OF DISASTER MANAGEMENT AND HUMANITARIAN ASSISTANCE: FEMALE REP
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
                                                               $s="SELECT * FROM sch_disa_female";
                                                                $q=mysqli_query($conn,$s);
                                                                $count=1;
                                                                while($r=mysqli_fetch_assoc($q)) {
                                                                    ?>
                                                                    <tr class="gradeA">
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
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
        <footer class="sticky-footer">
            <strong>2017 &copy; MMUST SMARTVOTER SYSTEM</strong>
        </footer>
        <!--footer section end-->
    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../js/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/modernizr.min.js"></script>
<script src="../js/jquery.nicescroll.js"></script>

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>

</body>
</html>
