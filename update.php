<?php
include "config.php";
    $email1 = $_GET['updateid'];

if(isset($_GET['updateid'])){
    $email1 = $_GET['updateid'];

    echo $email1;

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pas'];

        echo $email;
        echo $user;
        echo $pass;
        echo "hello";

        // $sql = "UPDATE `userid` SET email='$email', user='$user', password='$pass' WHERE email='$email1'";

        // $result = mysqli_query($conn, $sql);
        // if ($result) {
        //     echo "Updated successfully","\n";
        //     // header('location:insert.php');
        //     // exit;
        // } else {
        //     echo "Record not updated: " . mysqli_error($conn);
        // }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="form1.css">
</head>
<body>
    <div class="container">
        <form action="update.php" method="post">
            <label for="email">Email: </label>
            <input type="text" placeholder="Email" name="email">
            <label for="user">User: </label>
            <input type="text" placeholder="User" name="user">
            <label for="pas">Password: </label>
            <input type="text" placeholder="Password" name="pas">
            <input type="submit" value="Update" name="submit">
        </form>
    </div>
</body>
</html>
