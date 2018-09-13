<?php require_once('include/side_bar.php');
$x=@$_GET['id'];
$y=@$_GET['act'];
//$q=@$_GET['position'];
if(@$_GET['act']=='vote'){
    $sq="SELECT * FROM sec_votes WHERE reg_number='$reg' AND position_id=(SELECT position from candidates WHERE candidate_id='$x')";
    $qr=mysqli_query($conn,$sq);
    $count=$qr->num_rows;
    if($count>0){
        $msg= "<div class='alert alert-warning'> SORRY!! You have already voted.</div>";
        //echo "<script> alert('SORRY!! You have already voted this position!');window.location.href='special_interest'  </script> ";
    }
    else{
        $sql="INSERT INTO sec_votes(reg_number,candidate_id,position_id,school_id,vote_time) VALUES('$reg','$x',(SELECT position from candidates WHERE candidate_id='$x'),'$school',NOW())";
        if(mysqli_query($conn,$sql)){
            $msg= "<div class='alert alert-success'> THANKS!! Your vote successfully casted.</div>";
            //echo "<script> alert('Vote successfully casted!,,');window.location.href='special_interest'  </script> ";
        }
        else{
            echo"failed".mysqli_error($conn);
        }
    }

}
?>
    <!-- left side end-->

    <!-- main content start-->
<?php require_once('include/header1.php')?>
    <!-- header section end-->

    <!--body wrapper start-->
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info">
                    <marquee>MMUST SMART VOTER SYSTEM</marquee>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel-heading">
                        special interest secretary
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
                    </header>
                    <div class="panel-body">
                        <div>
                            <?php
                            if(isset($msg)){
                                echo $msg;
                            }
                            ?>
                        </div>
                        <div class="">
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>Passport</th>
                                    <th>Reg. Number</th>
                                    <th> Full Names </th>
                                    <th> School </th>
                                    <th> Position </th>
                                    <th class="hidden-phone" style="text-align: center">ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $s="SELECT *
        FROM
            smartvoter.candidates
            INNER JOIN smartvoter.students
                ON (candidates.reg_number = students.reg_number)
            INNER JOIN smartvoter.positions
                ON (candidates.position = positions.position_id)
            INNER JOIN smartvoter.departments
                ON (students.dept_id = departments.dept_id)
            INNER JOIN smartvoter.schools
                ON (departments.school_id = schools.school_id)WHERE positions.position_id=5";
                                $q=mysqli_query($conn,$s);
                                while($r=mysqli_fetch_assoc($q)) {
                                    ?>
                                    <tr>
                                        <td><img src="<?php echo "../uploads/".$r['passport'];?>" alt="<?php echo $r['passport']?>" class="img-rounded" style="width: 100px; height: 100px;"></td>
                                        <td><?php echo $r['reg_number']?></td>
                                        <td><?php echo $r['fname']?>  <?php echo $r['lname']?></td>
                                        <td><?php echo $r['school_name']?></td>
                                        <td><?php echo $r['position_name']?></td>
                                        <td class="center hidden-phone">
                                            <a class="btn btn-sm btn-success" name="vote" onclick="return confirm('Confirm your vote')" href="?action=transview&id=<?php echo $r['candidate_id']?>&act=vote">VOTE NOW </a>
                                        </td>

                                    </tr>
                                    <?php
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
<?php require('include/footer.php'); ?>