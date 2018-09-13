<?php require_once('include/side_bar.php')?>
<!-- left side end-->

<!-- main content start-->
<?php require_once('include/header1.php')?>
<!-- header section end-->
<body class="sticky-header">
<section>
    <div class="wrapper">

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">add election candidates</h3>
            </div>
            <div class="panel-body">
                <!--<form method="get" action="" id="form_search">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="regno" id="regno" placeholder="Enter Registration Number">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="submit" name="search" class="btn btn-sm btn-info">Search</button>
                            </div>
                        </div>
                    </div>
                </form>-->
                <?php
                if(isset($_POST['search'])){
                    $regno=$_GET['regno'];
                    $query=$conn->query("SELECT * FROM students WHERE reg_number='$regno'");
                    $row=$query->fetch_array();
                    $count=$query->num_rows;
                    $regn=$row['reg_number'];
                    $fname=$row['fname'];
                    $lname=$row['lname'];
                    $fullname=$fname.'  '.$lname;

                }
                ?>
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <?php
                    if(isset($_POST['submit'])){
                        move_uploaded_file($_FILES['passport']['tmp_name'],"../uploads/".$_FILES['passport']['name']);
                        $registration=$_POST['registration'];
                        $position=$_POST['position'];
                        $passport=$_FILES['passport']['name'];

                        $check_reg=$conn->query("SELECT * FROM candidates WHERE reg_number='$registration'");
                        $execute=$check_reg->fetch_array();
                        $count=$check_reg->num_rows;
                        $reg_n=$execute['reg_number'];
                        if($count==1){
                            echo"<div class='alert alert-warning'>
                           <button class='close' data-dismiss='alert'>&times;</button>Failed!! Candidate of the reg number $registration is already contesting another seat.
                        </div>";
                        }
                        else{
                            $sql="INSERT INTO candidates(reg_number,position,passport)VALUES('$registration','$position','$passport')";
                            if(mysqli_query($conn,$sql)){
                                echo"<div class='alert alert-success'>
                           <button class='close' data-dismiss='alert'>&times;</button>Candidate successfully added
                        </div>";
                            }
                            else{
                                echo"<div class='alert alert-warning'>
                           <button class='close' data-dismiss='alert'>&times;</button>Failed!!
                        </div>";
                            }
                        }

                    }
                    ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Registration No:</label>
                                 <select class="form-control" name="registration" id="registration" size="">
                                    <option>~~Select Student~~</option>
                                    <?php
                                    $s="SELECT * FROM students";
                                    $r=mysqli_query($conn,$s);
                                    while($reg=mysqli_fetch_assoc($r)) {
                                        ?>
                                        <option value="<?php echo $reg['reg_number']?>"><?php echo $reg['reg_number']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                           <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputFile">Position:</label>
                                <select class="form-control" name="position" size="">
                                    <option>~~Select Position~~</option>
                                    <?php
                                    $s="SELECT * FROM positions";
                                    $q=mysqli_query($conn,$s);
                                    while($r=mysqli_fetch_assoc($q)) {
                                        ?>
                                        <option value="<?php echo $r['position_id']?>"><?php echo $r['position_name']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <fieldset class="form-group">
                                        <label for="file">Passport</label>
                                        <label class="custom-file center-block block">
                                            <input type="file" id="file" class="custom-file-input" name="passport" id="passport">
                                            <span class="custom-file-control"></span> </label>
                                    </fieldset>
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
    </div>
</section>
</body>

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

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>

</body>
</html>
