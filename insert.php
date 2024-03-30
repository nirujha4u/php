<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pas']; 

    $sql = "INSERT INTO userid (email, user, password) VALUES ('$email', '$user', '$pass')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Record added successfully","\n";
        // exit;
    } else {
        echo "Record not added: " . mysqli_error($conn); 
    }
}

echo "<br><br>";

$result1 = $conn->query("SELECT * FROM userid");

echo "
<table border='.5'>
<tr>
<th>Email</th><th>User id</th><th>Password</th></th><th>Operation</th>
</tr>";

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) { 
        echo "<tr>
        <td>" . $row["email"]."</td>
        <td>" . $row["user"]."</td>
        <td>" . $row["password"]."</td>
        <td><button><a href='update.php?updateid=".$row['email']."'>Update</a></button><button><a href='delete.php?del_eid=".$row['email']."'>Delete</a></button></td>
        </tr>";
    }
} else {
    echo "No records found";
}

echo "</table>";
$conn->close();
?>

