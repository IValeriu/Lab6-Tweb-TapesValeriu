<?php
require_once 'dbh.php';

$name = "";
$pass = "";

session_start();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$name' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        echo "<span class='form-success'>You have been Singed In successfully!</span>";
    } else {
        $error = "error";
        echo "<span class='form-error'>Undefined User!</span>";
        die();
    }
} 


?>