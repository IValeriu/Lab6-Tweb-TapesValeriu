<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $errorEmpty = false;
    $errorEmail = false;
    $errorPhone = false;

    $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);


    if (empty($name) || empty($email) || empty($phone) || empty($message)){
        echo "<span class='form-error'>Fill in all fields!</span>";
        $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='form-error'>Write a valid e-mail adress!</span>";
        $errorEmail = true;
    }
    elseif(strlen($phone) !== 9) {
        echo "<span class='form-error'>Write a valid phone number!</span>";
        $errorPhone = true;
    
    }
    else {
        echo "<span class='form-success'>Form was submited successfully!</span>";
    
    }
}
else {
    echo "There was an error!";
}

?>

<script>
    $("#mail-name, #mail-email, #mail-phone, #mail-message").removeClass("input-error");

    var $errorEmpty = "<?php echo $errorEmpty; ?>";
    var $errorEmail = "<?php echo $errorEmail; ?>";
    var $errorPhone = "<?php echo $errorPhone; ?>";

    if (errorEmpty == true) {
        $("#mail-name, #mail-email, #mail-phone, #mail-message").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#mail-email").addClass("input-error");
    }
    if (errorPhone == true) {
        $("#mail-phone").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false && errorPhone == false) {
        $("#mail-name, #mail-email, #mail-phone, #mail-message").val("");
    }
</script>