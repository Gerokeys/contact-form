<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];   
    $website = $_POST['website'];
    $message = $_POST['message'];

    if(empty($name) || empty($email) || empty($message)) {
        header("Location: index.php?error=emptyfields"); exit();
    }else {
        $to = "shikukugerald111@gmail.com";

        if(mail($to,$phone,$message,$email)){
            header("Location:index.php?success");
        }
    }
}
else {
    header("Location:index.php");
}
?>