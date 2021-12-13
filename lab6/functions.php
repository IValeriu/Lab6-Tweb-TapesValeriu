<?php

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function checkName($name) {
        if (empty($_POST["name"])) {
            return false;
        } 
        else if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            return false;
        }
        return true;
    }

    function checkEmail($email){
        if (empty($_POST["email"])) {
            return false;
        } 
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    function checkPassword($password){
        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);

        if (empty($_POST["password"])){
            return false;
        } else if(strlen($password) < 5 || !$number || !$uppercase || !$lowercase) {
            return false;
        }
        return true;
    }

    function checkCPassword($cpassword, $password){
        if (empty($_POST["password"]) || empty($_POST["cpassword"])){
            return false;
        } else if($_POST["password"] != $cpassword) {
            return false;
        }
        return true;
    }

?>