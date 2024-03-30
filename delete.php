<?php
include "config.php";

if(isset($_GET['del_eid'])){
    $email = $_GET['del_eid'];

    $sql = "DELETE FROM userid WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if($result){
        // echo "Record deleted successfully";
        header('location:insert.php');
    } else {
        echo "Record not deleted: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
