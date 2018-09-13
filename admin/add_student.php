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
                        <h3 class="panel-title">ADD STUDENT</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        if(isset($_POST['submit'])){
                            $department=$_POST['department'];
                            $regno=$_POST['regno'];
                            $fname=$_POST['fname'];
                            $mname=$_POST['mname'];
                            $lname=$_POST['lname'];
                            $email=$_POST['email'];
                            $gender=$_POST['gender'];
                            $phone=$_POST['phone'];
                            $residency=$_POST['residency'];
                            $program=$_POST['program'];
                            $role=2;
                            $school=$_POST['school'];
                            $pass=1234;
                            $session=2;

                            $sql="INSERT INTO students(school_id,dept_id,prog_id,role_id,reg_number,fname,mname,lname,email,gender,phone,residence_id,password,session_id)VALUES('$school','$department','$program','$role','$regno','$fname','$mname','$lname','$email','$gender','$phone','$residency','$pass','$session')";
                            if(mysqli_query($conn,$sql)){
                                echo"<div class='alert alert-success'>
                           <button class='close' data-dismiss='alert'>&times;</button>Data Successfully Saved
                        </div>";
                            }
                            else{
                                echo"<div class='alert alert-warning'>
                           <button class='close' data-dismiss='alert'>&times;</button>Failed!! Kindly check connection and try again
                        </div>".mysqli_error($conn);
                            }
                        }
                        ?>
                        <form role="form" method="post" action="" id="students">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">School:</label>
                                        <select class="form-control" name="school" id="school">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Department:</label>
                                        <select class="form-control" name="department" id="department">
                                            <option value ="">--Select Department Name--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Programme:</label>
                                        <select class="form-control" name="program" id="program">
                                            <option value="">~~Select Programme~~</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Registration Number:</label>
                                        <input type="text" class="form-control" name="regno" id="regno" placeholder="Enter regno">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name:</label>
                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Middle Name:</label>
                                        <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter Middle Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name:</label>
                                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email:</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Gender:</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option>~~Select Gender~~</option>
                                            <?php
                                            $gender="SELECT * FROM gender";
                                            $g=mysqli_query($conn,$gender);
                                            while($gn=mysqli_fetch_assoc($g)){
                                                ?>
                                                <option value="<?php echo $gn['gender_id']?>"><?php echo $gn['gender_name']?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone:</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Residency:</label>
                                        <select class="form-control" name="residency" id="residency" >
                                            <option>~~Select Residency~~</option>
                                            <?php
                                            /*$s="SELECT * FROM residency";
                                            $q=mysqli_query($conn,$s);
                                            while($r=mysqli_fetch_assoc($q)) {
                                                ?>
                                                <option value="<?php echo $r['residence_id']?>"><?php echo $r['residence_name']?></option>
                                                <?php
                                            }
                                            */
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-send"></i> Submit</button>
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
<script src="../js/loader.js" ></script>
<script src="../js/validation.js" type="text/javascript"></script>
<script src="../js/student_validator.js" type="text/javascript"></script>

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>

</body>
</html>
