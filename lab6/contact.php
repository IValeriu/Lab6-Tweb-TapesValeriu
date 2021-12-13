<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Povestea unui om lenes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                event.preventDefault();
                var name = $("#mail-name").val();
                var email = $("#mail-email").val();
                var phone = $("#mail-phone").val();
                var message = $("#mail-message").val();
                var submit = $("#mail-submit").val();
                $(".form-message").load("mail.php", {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
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
        <form class="cmxform" action="mail.php" method="POST">
            <div class="contact-box">
                <div class="right">
                    <h2>Contact Us</h2>
                    <p class="form-message"></p>
                    <input id="mail-name" type="text" name="name" class="field" placeholder="Your Name">
                    <input id="mail-email" type="text" name="email" class="field" placeholder="Your Email">
                    <input id="mail-phone" type="phone" name="phone" class="field" placeholder="Your Phone">
                    <textarea id="mail-message" name="message" class="field area" placeholder="Message"></textarea>
                    <button id="mail-submit" type="submit" name="submit" class="btni">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>