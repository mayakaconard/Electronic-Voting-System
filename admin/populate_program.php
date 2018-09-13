<?php
include_once('../config/db_connect.php');
$dept = $_POST['prog'];
if(isset($dept)) {
    // fetch state details
    $stmt = $conn->query("SELECT * FROM programmes WHERE department='$dept' ORDER BY program ASC");
    echo '<option value="">~~Select Programme~~</option>';
    while($row = mysqli_fetch_assoc($stmt)) {
        echo '<option value="' . $row['prog_id'] . '">' . $row['program'] . '</option>';
    }
}


?>