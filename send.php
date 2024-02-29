<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if (isset($_POST['send'])) {
        //PHPMailer...
        $mail = new PHPMailer(true);

        $mail -> isSMTP();
        $mail -> Host = 'smtp.gmail.com';
        $mail -> SMTPAuth = true;
        $mail -> Username = "s.marcoci95@gmail.com";
        $mail -> Password = "tmly dkkm zpen gsex";
        $mail -> SMTPSecure = "tls"; 
        $mail -> Port = 587; 

        $mail -> isHTML(true);

        $mail -> SMTPDebug = 2;

        $mail -> setFrom('s.marcoci95@gmail.com');

        $mail -> addAddress($_POST['email']);

        

        $mail -> Subject = $_POST['subject'];
        $mail -> Body = $_POST['message'];

        $mail -> send();

        header("Location: ./index.php");

    }