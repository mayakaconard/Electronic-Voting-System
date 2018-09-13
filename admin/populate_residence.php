<?php
include_once('../config/db_connect.php');
$gender = $_POST['res'];
if(isset($gender)) {
    // fetch state details
    $stmt = $conn->query("SELECT * FROM residency WHERE gender_id='$gender'");
    //ORDER BY program ASC
    echo '<option value="">~~Select Residency~~</option>';
    while($row = mysqli_fetch_assoc($stmt)) {
        echo '<option value="' . $row['residence_id'] . '">' . $row['residence_name'] . '</option>';
    }
}


?>