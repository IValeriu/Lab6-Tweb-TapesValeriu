<?php

require_once 'dbh.php';

$name = "";
$email = "";
$password = "";
$rpassword = "";



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    $agree = filter_input(INPUT_POST, 'agree', FILTER_SANITIZE_STRING);

    $errorEmpty = false;
    $errorEmail = false;
    $errorPassword = false;
    $errorRpassword = false;
    $errorAgree = false;

    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (empty($name) || empty($email) || empty($password) || empty($rpassword) || empty($agree)){
        echo "<span class='form-error'>Fill in all fields!</span>";
        $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='form-error'>Write a valid e-mail adress!</span>";
        $errorEmail = true;
    }
    elseif (strlen($password) < 5 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo "<span class='form-error'>Password must be at least 5 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.</span>";

    }
    elseif ($rpassword !== $password) {
        echo "<span class='form-error'>Confirm password is not equal to password!</span>";
    }
    else {
        echo "<span class='form-success'>Form was submited successfully!</span>";
    }
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $password = md5($password);
    if(!mysqli_num_rows($result) > 0){
        $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        
    } 
    

}

else {
    echo "There was an error!";
}

?>
