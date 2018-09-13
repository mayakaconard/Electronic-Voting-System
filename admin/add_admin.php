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
                        <h3 class="panel-title">ADD ADMINISTRATOR</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        if(isset($_POST['submit'])){
                            $pfno=$_POST['pfno'];
                            $fname=$_POST['fname'];
                            $mname=$_POST['mname'];
                            $lname=$_POST['lname'];
                            $email=$_POST['email'];
                            $gender=$_POST['gender'];
                            $phone=$_POST['phone'];
                            $role=1;
                            $password=$_POST['password'];
                            $safe=md5($password);

                            $sql="INSERT INTO admins(role_id,pf_number,fname,mname,lname,email,gender,phone,password)VALUES('$role','$pfno','$fname','$mname','$lname','$email','$gender','$phone','$safe')";
                            if(mysqli_query($conn,$sql)){
                                echo"<div class='alert alert-success'>
                           <button class='close' data-dismiss='alert'>&times;</button>Data Successfully Saved
                        </div>";
                            }
                            else{
                                echo"<div class='alert alert-success'>
                           <button class='close' data-dismiss='alert'>&times;</button>Failed!! Kindly check connection and try again
                        </div>";
                            }
                        }
                        ?>
                        <form role="form" autocomplete="off" method="post" action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">PF Number:</label>
                                        <input type="text" class="form-control" name="pfno" id="pfno" placeholder="Enter pfno">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name:</label>
                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Middle Name:</label>
                                        <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter Middle Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Gender:</label>
                                        <select class="form-control" name="gender">
                                            <option>~~Select Gender~~</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone:</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password:</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
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
