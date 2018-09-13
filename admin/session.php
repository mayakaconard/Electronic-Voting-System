<?php require_once('include/side_bar.php'); ?>

<?php require_once('include/header1.php')?>

<div class="page-heading" xmlns="http://www.w3.org/1999/html">

</div>
<!-- page heading end-->

<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    opening and closing voting session
                </div>
                <div class="panel-body">
                <div class="col-md-8">
                        <?php
                        if(isset($_POST['open'])){

                            $sql="UPDATE students SET session_id='1'";
                            if(mysqli_query($conn,$sql)){
                                echo"<div class='alert alert-success'>
                           <button class='close' data-dismiss='alert'>&times;</button>Voting session successfully opened
                        </div>";
                            }
                            else{
                                echo"<div class='alert alert-warning'>
                    <button class='close' data-dismiss='alert'>&times;</button>Opening Failed!!
                        </div>";
                            }
                        }

                        else{
                            if(isset($_POST['close'])){

                                $sql="UPDATE students SET session_id='2'";
                                if(mysqli_query($conn,$sql)){
                                    $stmt=$conn->query("INSERT INTO winners
                                    SELECT * FROM sch_com_female UNION SELECT * FROM sch_com_male UNION
                                    SELECT * FROM sch_edu_female UNION SELECT * FROM sch_edu_male UNION
                                    SELECT * FROM sch_engi_female UNION SELECT * FROM sch_engi_male UNION
                                    SELECT * FROM sch_natul_female UNION SELECT * FROM sch_natul_male UNION
                                    SELECT * FROM sch_nurs_female UNION SELECT * FROM sch_nurs_male UNION
                                    SELECT * FROM sch_pub_female UNION SELECT * FROM sch_pub_male UNION
                                    SELECT * FROM sch_agri_female UNION SELECT * FROM sch_agri_male UNION
                                    SELECT * FROM sch_arts_female UNION SELECT * FROM sch_arts_male UNION
                                    SELECT * FROM sch_disa_female UNION SELECT * FROM sch_disa_male UNION
                                    SELECT * FROM sobe_female UNION SELECT * FROM sobe_male UNION
                                    SELECT * FROM sch_med_female UNION SELECT * FROM sch_med_male UNION
                                    SELECT * FROM hall_one UNION SELECT * FROM hall_two UNION
                                    SELECT * FROM hall_three UNION SELECT * FROM hall_4f UNION
                                    SELECT * FROM hall_4m UNION
                                    SELECT * FROM non_resi_female UNION SELECT * FROM non_resi_male
                                    ");
                                    if($stmt){
                                        echo"<div class='alert alert-success'>
                           <button class='close' data-dismiss='alert'>&times;</button>Voting session successfully closed
                        </div>";
                                    }
                                }
                                else{
                                    echo"<div class='alert alert-warning'>
                                    <button class='close' data-dismiss='alert'>&times;</button>Closing Failed!!
                                        </div>".mysqli_error($conn);
                                   }
                            }
                        }
                        ?>
                    <form method="post">
                        <div class="row">
                            <?php
                            $query=$conn->query("SELECT * FROM students");
                            $row=$query->fetch_array();
                            //$c=$query->num_rows;
                            $sess=$row['session_id'];
                            if($sess==1){
                                ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Voting session currently opened CLICK to close.</strong>
                                        </br>
                                        </br>
                                        <button type="submit" name="close" class="btn btn-warning">Close Session</button>
                                    </div>
                                </div>
                            <?php
                            }
                            else{
                                ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Voting session currently closed CLICK to open.</strong>
                                        </br>
                                        </br>
                                        <button type="submit" name="open" class="btn btn-info">Open Session</button>
                                    </div>
                                </div>
                            <?php
                            }

                            ?>

                        </div>
                    </form>
                 </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">deactivate students accounts</div>
                <div class="panel-body">
                    <form method="post">
                        <?php
                        if(isset($_POST['deactivate'])){
                            $query1=$conn->query("UPDATE students set role_id=4 WHERE role_id IN(2)");

                            if($query1){
                                echo"<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button>Success!..
                                </div>".mysqli_error($conn);
                            }
                            else{
                                echo"<div class='alert alert-warning'>
                                <button class='close' data-dismiss='alert'>&times;</button>failed!..
                                </div>".mysqli_error($conn);
                            }
                        }
                        else{
                            if(isset($_POST['activate_student'])){
                                $query1=$conn->query("UPDATE students set role_id=2 WHERE role_id IN(4)");

                                if($query1){
                                    echo"<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button>Success!..
                                </div>".mysqli_error($conn);
                                }
                                else{
                                    echo"<div class='alert alert-warning'>
                                <button class='close' data-dismiss='alert'>&times;</button>failed!..
                                </div>".mysqli_error($conn);
                                }
                            }
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    </br>
                                    <button type="submit" name="deactivate" class="btn btn-default">Deactivate Accounts.</button>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    </br>
                                    <button type="submit" name="activate_student" class="btn btn-info">Activate Accounts</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">activate winners accounts</div>
                <div class="panel-body">
                    <form method="post">
                        <?php
                        if(isset($_POST['activate'])){
                        $sql1=$conn->query("SELECT * from winners");
                            while($row=$sql1->fetch_array()){
                                $reg=$row['reg_number'];

                                $sql2=$conn->query("UPDATE students SET role_id=3 WHERE students.reg_number='$reg'");
                            }

                            if($sql2){
                                echo"<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button>Accounts Successfully activated.
                                </div>";
                            }
                            else{
                                echo"<div class='alert alert-warning'>
                                <button class='close' data-dismiss='alert'>&times;</button>failed!..
                                </div>".mysqli_error($conn);
                            }

                        }
                        ?>
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        </br>
                                        <button type="submit" name="activate" class="btn btn-info">Activate Winners Accounts.</button>
                                    </div>
                                </div>

                                <!--<div class="col-md-4">
                                    <div class="form-group">
                                        <strong>Voting session currently closed CLICK to open.</strong>
                                        </br>
                                        </br>
                                        <button type="submit" name="open" class="btn btn-info">Open Session</button>
                                    </div>
                                </div>-->

                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">activate sec accounts</div>
                <div class="panel-body">
                    <form method="post">
                        <?php
                        if(isset($_POST['activatesec'])){
                            $sql3=$conn->query("SELECT * from candidates WHERE position IN(1,2,3,4,5,6)");
                            while($row=$sql3->fetch_array()){
                                $reg=$row['reg_number'];

                                $sql4=$conn->query("UPDATE students SET role_id=3 WHERE students.reg_number='$reg'");
                            }

                            if($sql4){
                                echo"<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button>SEC Accounts Successfully activated.
                                </div>";
                            }
                            else{
                                echo"<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button>failed!..
                                </div>".mysqli_error($conn);
                            }

                        }
                        ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    </br>
                                    <button type="submit" name="activatesec" class="btn btn-success">Activate SEC Accounts.</button>
                                </div>
                            </div>

                            <!--<div class="col-md-4">
                                <div class="form-group">
                                    <strong>Voting session currently closed CLICK to open.</strong>
                                    </br>
                                    </br>
                                    <button type="submit" name="open" class="btn btn-info">Open Session</button>
                                </div>
                            </div>-->

                        </div>
                    </form>
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
