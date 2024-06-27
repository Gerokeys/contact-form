<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Contact form</title>
</head>
<body>
    <div class="wrapper">
        <header>Send us a message</header>
        <?php

        $msg = "";
        if (isset($_GET['error'])) {
            $msg = "please fill in  the blanks";
            echo '<p style="background-color:red">'.$msg.'</p>';
        }

        if(isset($_GET['success'])) {
            $msg = "Your message has been sent successfully";
            echo '<p style="background-color:green">'.$msg.'</p>';
        }
        ?>
        <form action="contactform.php" method="post">
            <div class="dbl-field">
                <div class="field">
                    <input type="text" placeholder="Enter your name" name="name">
                    <i class="fas fa-user"></i>
                </div>

                <div class="field">
                    <input type="email" placeholder="Enter your email" name="email">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input type="text" placeholder="Enter your phone number" name="phone">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="field">
                    <input type="text" placeholder="Enter your Website" name="website">
                    <i class="fas fa-globe"></i>
                </div>
            </div>
            <div class="message">
                <textarea placeholder="write your message" name="message"></textarea>
                <i class="fa-solid fa-message"></i>
            </div>
            <div class="button-area">
                <button type="submit" name="submit">Send message</button>
                <span>sending your message...</span>
            </div>
        </form>
    </div>
</body>
</html>
