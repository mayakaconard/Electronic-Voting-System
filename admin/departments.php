<?php require_once('include/side_bar.php')?>
<!-- left side end-->

<!-- main content start-->
<?php require_once('include/header1.php')?>
<!-- header section end-->

<!-- page heading start-->
<div class="page-heading">
    <div class="row">
        <div class="col-lg-4">
            <!--<a  style="background-color: #0063DC;" href="add_candidate" class="btn btn-primary">Create New +</a>-->
        </div> </div>
</div>
<!-- page heading end-->

<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    ADD SCHOOLS
                </div>
                <div class="panel-body">
                    <?php
                    if(isset($_POST['submit'])){
                        $sch=$_POST['school'];
                        $dept=$_POST['department'];

                        $sql="INSERT INTO departments(school_id,dept_name) VALUES ('$sch','$dept')";
                        if(mysqli_query($conn,$sql)){
                            echo"<div class='alert alert-success'>
                           <button class='close' data-dismiss='alert'>&times;</button>Data Successfully Entered
                        </div>";
                        }
                        else{
                            echo"<div class='alert alert-warning'>
                    <button class='close' data-dismiss='alert'>&times;</button>Failed!! Kindly check network connectivity
                        </div>";
                        }
                    }
                    ?>
                    <form role="form" method="post" action="">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">School Name:</label>
                                    <select class="form-control" name="school" required="required">
                                     <option>~~Select School~~</option>
                                     <?php
                                     $s="SELECT * FROM schools";
                                     $q=mysqli_query($conn,$s);
                                     while($r=mysqli_fetch_assoc($q)) {
                                         ?>
                                         <option value="<?php echo $r['school_id']?>"><?php echo $r['school_name']?></option>
                                         <?php
                                     }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Department Name:</label>
                                    <input type="text" class="form-control" name="department" id="department" placeholder="Enter Department Name" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-warning"><i class="fa fa-send"></i> Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <header class="panel-heading">
                    Departments List
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table">
                        <div class="table-responsive">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>SCHOOL NAME</th>
                                <th>DEPARTMENT NAME)</th>
                                <th class="hidden-phone">ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sq="SELECT schools.*, departments.dept_name, departments.dept_id
                            FROM smartvoter.departments INNER JOIN smartvoter.schools
                                ON (departments.school_id = schools.school_id)";
                            //ORDER BY departments.school_id
                            $qr=mysqli_query($conn,$sq);
                            $count=1;
                            while($rw=mysqli_fetch_assoc($qr)) {
                                ?>
                                <tr class="gradeA">
                                    <td><?php echo $count;?></td>
                                    <td><?php echo $rw['school_name'];?></td>
                                    <td><?php echo $rw['dept_name'];?></td>
                                    <td class="center hidden-phone">
                                        <a class="btn btn-sm btn-info" href="#edit_dept<?php echo $rw['dept_id']?>" data-toggle="modal">UPDATE</a>
                                        <a class="btn btn-sm btn-danger">DELETE</a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div id="edit_dept<?php echo $rw['dept_id']?>" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #4682B4">
                                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                                                <h4 class="modal-title">Update Department</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="edit_dept?id=<?php echo $rw['dept_id']?>">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">School Name:</label>
                                                                <select class="form-control" name="school">
                                                                    <?php
                                                                    $stmt="SELECT * FROM schools";
                                                                    $query=mysqli_query($conn,$stmt);
                                                                    while($row2=mysqli_fetch_assoc($query)) {
                                                                        ?>
                                                                        <option
                                                                            value="<?php echo $row2['school_id']; ?> " <?php if($rw['school_id']==$row2['school_id']) echo 'selected="selected"';?> > <?php echo $row2['school_name'] ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Department Name:</label>
                                                                <input class="form-control" name="dept_name" value="<?php echo $rw['dept_name']?>">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="update" class="btn btn-success">Save changes</button>
                                                    </div>
                                                </form>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- modal -->
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
