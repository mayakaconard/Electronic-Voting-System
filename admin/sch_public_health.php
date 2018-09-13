<?php require_once('include/side_bar.php');
//require_once('include/total_votes.php');
?>
<!-- left side end-->

<!-- main content start-->
<?php require_once('include/header1.php')?>
<!-- header section end-->

<!--body wrapper start-->
<div class="wrapper">

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <header class="panel-heading">
                    Votes Per Candidate: SCHOOL OF PUBLIC HEALTH, BIOMEDICAL SCIENCES: MALE REPS
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
                    Votes Per Candidate: SCHOOL OF PUBLIC HEALTH, BIOMEDICAL SCIENCES: FEMALE REPS
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
                                votes.position_id=9 AND votes.school_id=6

                                GROUP BY votes.candidate_id
                                ORDER BY kura DESC";
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

<!--body wrapper end-->

<!--footer section start-->
<footer class="sticky-footer">
    <strong><?php echo date('Y')?> &copy; MMUST SMARTVOTER SYSTEM</strong>
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

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="../js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="../js/dynamic_table_init.js"></script>

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>

</body>
</html>
<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
echo("Hello, World!");
?>

</body>
</html>