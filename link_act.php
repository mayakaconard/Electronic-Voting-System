<?php require_once('config/db_connect.php');
require_once('/smartvoter/activate_account');
$stmt=$conn->query("UPDATE students SET status=1 WHERE email='$email'");
if($stmt){
    //echo "<div class='alert alert-success'>
    //<button class='close' data-dismiss='alert'>&times;</button></strong>Success!</strong>  Account activation successful.</div>";
    echo "<script> alert('Account successfully activated');window.location.href='/smartvoter/login'  </script> ";
}
?>

