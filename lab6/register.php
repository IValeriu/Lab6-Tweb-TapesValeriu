<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Povestea unui om lenes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                event.preventDefault();
                var name = $("#mail-name").val();
                var email = $("#mail-email").val();
                var password = $("#mail-password").val();
                var rpassword = $("#mail-rpassword").val();
                var submit = $("#mail-submit").val();
                var agree = $("#mail-agree").val();
                $(".form-message").load("register-submit.php", {
                    name: name,
                    email: email,
                    password: password,
                    rpassword: rpassword,
                    agree: agree,
                    submit: submit
                }); // ajax load function
            });
        });
    </script>
</head>
<body>
    
    <div id="sidebar">
        <div class="toggle-btn" onclick="openMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li>Menu</li>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="container-box">
        <form id="registration" name="register" class="register-form" method="POST" action="mail.php">
            <div class="contact-box">
                <div class="right">
                    <h2>Register</h2>
                    <p class="form-message"></p>
                    <input id="mail-name" name="username" type="text" class="field username" placeholder="Enter Username">
                    <input id="mail-email" type="email" name="email" class="field" placeholder="Enter Email">
                    <input type="password" id="mail-password" class="field" placeholder="Enter Password" name="password">
                    <input type="password" id="mail-rpassword" class="field" placeholder="Repeat Password" name="rpassword" >
                    <input name="submit" id="mail-submit" class="btni loginbtn submit" type="submit" value="Submit">
                    <label for="agree">Please agree to our policy</label>
                    <input type="checkbox" class="checkbox" id="mail-agree" name="agree" value="itsChecked">
                    <div class="container signin">
                        <p>Already have an account? <a href="login.html" >Sign in</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/singup-form.js" ></script>
    <script src="js/script.js"></script>
</body>
</html>