<?php
require_once('../config/db_connect.php');
$sch_id=$_GET['id'];
if(isset($_POST['update'])){
    $sch=$_POST['school'];

    $sql="UPDATE schools SET school_name='$sch' WHERE school_id='$sch_id'";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "<script> alert('School Successfully Updated');window.location.href='schools'  </script> ";
    }
    else{
        echo "<script> alert('Failed!! Kindly check connection');window.location.href='schools'  </script> ";
        //  echo mysqli_error($conn);
    }
}
?>