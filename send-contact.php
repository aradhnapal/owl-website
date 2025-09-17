<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Get form values safely
$name    = $_POST['name']   ?? '';
$phone   = $_POST['phone']  ?? '';
$email   = $_POST['email']  ?? '';
$message = $_POST['message']?? '';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'sdev70817@gmail.com'; // Your Gmail
    $mail->Password   = 'syle qgsj scqv dvih'; // Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('sdev70817@gmail.com', 'Dev contact form');

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'New Contact Form Submission';

    // card-style body
    $mail->Body = '
    <div style="
      max-width:600px;
      margin:0 auto;
      font-family:Arial, sans-serif;
      border:1px solid #e0e0e0;
      border-radius:8px;
      box-shadow:0 2px 6px rgba(0,0,0,0.1);
      overflow:hidden;
    ">
      <div style="background:#28a745; color:#fff; padding:15px; text-align:center;">
        <h2 style="margin:0; font-size:22px;">Contact Form Details</h2>
      </div>
      <div style="padding:20px; background:#fafafa;">
        <p style="margin:0 0 10px;"><b>Name:</b> '.$name.'</p>
        <p style="margin:0 0 10px;"><b>Phone:</b> '.$phone.'</p>
        <p style="margin:0 0 10px;"><b>Email:</b> '.$email.'</p>
        <div style="margin-top:15px; padding:15px; background:#fff; border:1px solid #ddd; border-radius:5px;">
          <b>Message:</b><br>'.nl2br($message).'
        </div>
      </div>
      <div style="background:#f1f1f1; padding:10px; text-align:center; font-size:12px; color:#555;">
        This email was sent from your contact form.
      </div>
    </div>';

    $mail->send();
    ?>
    <script>
        alert("✅ Message sent successfully!");
        window.location.href = "contact.php"; // redirect back to your contact page
    </script>
    <?php
} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
