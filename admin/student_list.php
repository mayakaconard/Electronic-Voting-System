<?php require_once('include/side_bar.php');
require_once('include/total_votes.php');
?>
<!-- left side end-->

<!-- main content start-->
<?php require_once('include/header1.php')?>
<!-- header section end-->
<div class="page-heading">
    <div class="row">
        <div class="col-lg-4">
            <a  style="background-color: #0063DC;" href="add_student" class="btn btn-primary">Create New +</a>
        </div> </div>
</div>
<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <header class="panel-heading">
                    Votes Per Candidate
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
                                    <th>Reg Number</th>
                                    <th>Full Name</th>
                                    <th>School Name</th>
                                    <th>Department</th>
                                    <th>Programme</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $s="SELECT
                            students.reg_number
                            , students.fname
                            , students.lname
                            , students.gender
                            , schools.school_name
                            , departments.dept_name
                            , programmes.program
                            , roles.role_id
                        FROM
                            smartvoter.departments
                            INNER JOIN smartvoter.schools
                                ON (departments.school_id = schools.school_id)
                            INNER JOIN smartvoter.programmes
                                ON (programmes.school = schools.school_id) AND (programmes.department = departments.dept_id)
                            INNER JOIN smartvoter.students
                                ON (students.dept_id = departments.dept_id) AND (students.prog_id = programmes.prog_id) AND (students.school_id = schools.school_id)
                            INNER JOIN smartvoter.roles
                                ON (students.role_id = roles.role_id)";
                                $q=mysqli_query($conn,$s);
                                $count=1;
                                while($r=mysqli_fetch_assoc($q)) {
                                    ?>
                                    <tr class="gradeA">
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $r['reg_number']?></td>
                                        <td><?php echo $r['fname']?> <?php echo $r['lname']?></td>
                                        <td><?php echo $r['school_name']?></td>
                                        <td><?php echo $r['dept_name']?></td>
                                        <td><?php echo $r['program']?></td>
                                        <td><?php echo $r['gender']?></td>
                                        <td>
                                            <a class="btn btn-info" href="">Update</a>
                                            <a class="btn btn-danger" href="">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $count++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div></div>
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
