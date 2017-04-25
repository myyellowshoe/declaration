<?php
require 'php/class.phpmailer.php';
require 'php/class.smtp.php';

  if (isset($_POST['user_e']))  {

    //Email information
    $email = $_POST['user_e'];
    $admin_email = "signup@declaration.net";

    $mail = new PHPMailer();
    $mail->isSMTP(); // telling the class to use SMTP
    //$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";
    $mail->Host       = "smtp.gmail.com";      // SMTP server
    $mail->Port       = 587;                   // SMTP port
    $mail->Username   = "signup@declaration.net";  // username
    $mail->Password   = "signup456!!";            // password

    $mail->setFrom('signup@declaration.net', 'Signup Notice');
    $mail->Subject = 'New Declaration.net Signup';
    $mail->msgHTML('Email: ' . $email);
    $mail->addAddress('signup+new@declaration.net');

    //send email
    $mail->Send();
    echo("<p>Sent</p>");

  }
?>
