<?php require_once('include/side_bar.php')?>
    <!-- left side end-->

    <!-- main content start-->
<?php require_once('include/header1.php')?>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <div class="row">
                <div class="col-lg-4">
                    <a  style="background-color: #0063DC;" href="add_candidate" class="btn btn-primary">Create New +</a>


        <!-- page heading end-->


                <span class = "pull-center">
                    <a onclick="window.open(this.href); return false;" href=candidatespdf.php? type="button" class="btn btn-success" >  Export pdf  <i class="fa fa-sign-out"></i></a>
                </span>
                  </div>
             </div>
        </div>

        <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
        <div class="col-sm-12">
        <div class="panel panel-primary">
        <header class="panel-heading">
            List of Parliamentarian Candidates
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="table-responsive">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>S/N</th>
            <th>Passport</th>
            <th>Reg Number</th>
            <th>Full Name</th>
            <th>School Name</th>
            <th>Position</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $s="SELECT *
        FROM
            smartvoter.departments
            INNER JOIN smartvoter.schools
                ON (departments.school_id = schools.school_id)
            INNER JOIN smartvoter.students
                ON (students.dept_id = departments.dept_id)
            INNER JOIN smartvoter.candidates
                ON (candidates.reg_number = students.reg_number)
            INNER JOIN smartvoter.positions
                ON (candidates.position = positions.position_id) WHERE positions.position_id IN(8,9,10,11,12,13,14,15,16)";
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
                <td>
                    <a class="btn btn-sm btn-danger">DELETE</a>
                </td>
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
