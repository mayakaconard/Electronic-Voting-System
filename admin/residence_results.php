<?php require_once('include/side_bar.php')?>
    <!-- left side end-->

    <!-- main content start-->
<?php require_once('include/header1.php')?>

        <!-- page heading start-->
        <div class="page-heading">
           
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading custom-tab blue-tab">
                            <ul class="nav nav-tabs">
                                <li class="active">
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
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="hall_one">

                                     <!--S T A R T    O F   HALL ONE     W I N N E R -->
                                         <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel panel-primary">
                                                    <header class="panel-heading">
                                                        WINNER: HALL ONE REPRESENTATIVE
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
                                                               $s="SELECT * FROM hall_one";
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

                                 <!--   E N D     O F   HALL ONE      W I N N E R      -->


                                 <!--S T A R T   O F   HALL TWO     W I N N E R -->
                                <div class="tab-pane" id="hall_two">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-primary">
                                                <header class="panel-heading">
                                                    WINNER: HALL TWO REPRESENTATIVE
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
                                                           $s="SELECT * FROM hall_two";
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

                                       <!--E N D   HALL TWO    W I N N E R-->


                                        <!--S T A R T   O F  HALL THREE     W I N N E R S-->
                                <div class="tab-pane" id="hall_three">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel panel-primary">
                                                    <header class="panel-heading">
                                                        WINNER: HALL THREE REPRESENTATIVE
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
                                                               $s="SELECT * FROM hall_three";
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
                                <!--END  O F  HALL 3    W I N N E R -->

                                <!-- S T A R T     HALL FOUR    W I N N E R S-->
                                <div class="tab-pane" id="hall_four">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-primary">
                                                <header class="panel-heading">
                                                    WINNER: HALL FOUR MALE REPRESENTATIVE
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
                                                           $s="SELECT * FROM hall_4M ";
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


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-primary">
                                                <header class="panel-heading">
                                                    WINNER: HALL FOUR FEMALE RESPRESENTATIVE
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
                                                           $s="SELECT * FROM hall_4F";
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

                                <!--START  NON RESIDENTS     W I N N E R S-->
                                <div class="tab-pane" id="non_residents">

                                         <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel panel-primary">
                                                    <header class="panel-heading">
                                                        WINNERS: NON-RESIDENT MALE REPRESENTATIVES
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
                                                               $s="SELECT * FROM non_resi_male";
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

                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="panel panel-primary">
                                                    <header class="panel-heading">
                                                        WINNERS: NON-RESIDENT FEMALE REPRESENTATIVES
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
                                                               $s="SELECT * FROM non_resi_female";
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
                                <!--END  O F  NON RESIDENTS    W I N N E R S-->
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
