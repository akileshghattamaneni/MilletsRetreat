<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
        // PHPMailer configuration
        $mail = new PHPMailer(true);
        try {
               // Server settings
               $mail->isSMTP();
               $mail->Host       = 'mail.milletsretreat.com'; // Replace with your SMTP server
               $mail->SMTPAuth   = true;
               $mail->Username   = 'info@milletsretreat.com'; // Replace with your SMTP username
               $mail->Password   = 'Millets@123++'; // Replace with your SMTP password
               $mail->SMTPSecure = 'ssl';
               $mail->Port       = 465;

               // Sender and recipient settings
               $mail->setFrom('info@milletsretreat.com', 'Millets Retreat'); // Replace with your email and name
               $mail->addAddress('chinna.venkat5@gmail.com', 'Venkat'); // Replace with recipient's email and name
               $mail->addAddress('info@milletsretreat.com', 'Millets Retreat'); // Replace with recipient's email and name
               
              
$mail->isHTML(true);
$mail->Subject = 'New form submission';
$mail->Body = "Name: $name <br>  Phone: $phone <br> Email: $email <br> Subject: $subject <br> Message: $message" ;

                // Send email
                $mail->send();

               // If email is sent successfully, redirect to thankyou.php
        header("Location: thank-you.php");
        exit();
    } catch (Exception $e) {
        // If an error occurs, log the error message
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
else {
    // If the form is not submitted directly, redirect to the index page
    header("Location: index.php");
    exit();
}

ob_end_flush(); // Flush the output buffer
?>