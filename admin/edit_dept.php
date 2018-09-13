<?php
require_once('../config/db_connect.php');
$dept_id=$_GET['id'];
if(isset($_POST['update'])){
    $sch=$_POST['school'];
    $dept=$_POST['dept_name'];

    $sql="UPDATE departments SET school_id='$sch',dept_name='$dept' WHERE dept_id='$dept_id'";
    if(mysqli_query($conn,$sql)){
        echo "<script> alert('Data Successfully Updated');window.location.href='departments'  </script> ";
    }
    else{
        echo "<script> alert('Error in connection');window.location.href='departments'  </script> ";
        //  echo mysqli_error($conn);
    }
}

?>