<?php
$servername='localhost';
$username='root';
$password='';
$dbname='smartvoter';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  //echo "connected";
}
else{
    echo"no connection";
}
?>