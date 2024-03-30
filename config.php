<?php
$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="niranjan";

$conn=mysqli_connect($SERVERNAME, $USERNAME,$PASSWORD,$DATABASE);

if($conn){
    // echo "Connection Successfully";
}
else{
    die(mysqli_error($conn));
}

?>