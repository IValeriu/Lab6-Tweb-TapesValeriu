$(function() {
    $("#registration").validate({
        rules: {
            username: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
            agree: "required"
        },
        messages: {
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            agree: "/Please accept our policy"
        }
    });
});

$("#mail-name, #mail-email, #mail-pass, #mail-rpass, #mail-gender").removeClass("input-error");

    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>"

    if(errorEmpty == true) {
        $("#mail-name, #mail-email, #mail-pass, #mail-rpass, #mail-gender").addClass("input-error");
    }
    if(errorEmail == true) {
        $("#mail-email").addClass("input-error");
    }
    if(errorEmpty == false && errorEmail == false) {
        $("#mail-name, #mail-email, #mail-pass, #mail-rpass, #mail-gender").val("");
    }