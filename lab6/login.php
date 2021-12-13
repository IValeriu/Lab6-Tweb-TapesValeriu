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
    <script src="js/singup-form.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                event.preventDefault();
                var name = $("#username").val();
                var password = $("#password").val();
                var submit = $("#submit").val();
                $(".form-message").load("login-submit.php", {
                    name: name,
                    password: password,
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
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
    <div class="container-box">
        <form id="registration" name="login" action="login-submit.php" method="GET">
            <div class="contact-box">
                <div class="right">
                    <h2>Login</h2>
                    <p class="form-message"></p>
                    <input type="text" name="username" id="username" class="field" placeholder="Enter Username" >
                    <input type="password" id="password" class="field" placeholder="Enter Password" name="password">
                    <button id="submit" type="submit" name="submit" class="btni loginbtn">Login</button>
                    <input type="checkbox" class="remember" checked="checked" name="remember"> 
                    <label for="remember">Remember me.</label>
                    <div class="container signin">
                        <p>Don't have an account? <a href="register.html" >Sign Up</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
    

    <script src="js/script.js"></script>
</body>
</html>