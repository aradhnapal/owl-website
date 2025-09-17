<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Get form values
$name    = $_POST['name'];
$phone   = $_POST['phone'];
$email   = $_POST['email'];
$message = $_POST['message'];

// Create instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';       // SMTP server
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'sdev70817@gmail.com'; // Your Gmail
    $mail->Password   = 'syle qgsj scqv dvih';    // Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('sdev70817@gmail.com', 'Dev contact form'); // Receiver email

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = "
        <h3>Contact Form Details</h3>
        <p><b>Name:</b> $name</p>
        <p><b>Phone:</b> $phone</p>
        <p><b>Email:</b> $email</p>
        <p><b>Message:</b><br>$message</p>
    ";

    $mail->send();
    ?>
    <script>
        alert("✅ Message sent successfully!");
        window.location.href = "contact.php";
    </script>
    <?php
    // echo "✅ Message sent successfully!";
} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
