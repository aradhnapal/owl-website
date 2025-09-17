<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'sdev70817@gmail.com';
    $mail->Password   = 'syle qgsj scqv dvih'; // app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Detect which form is submitted
    $formType = $_POST['form_type'] ?? 'career';

    if ($formType === 'contact') {
        // Contact form fields
        $name    = $_POST['name'] ?? '';
        $email   = $_POST['email'] ?? '';
        $phone   = $_POST['phone'] ?? '';
        $message = $_POST['message'] ?? '';

        $mail->setFrom($email, $name);
        $mail->addAddress('sdev70817@gmail.com', 'Dev contact form');
        $mail->Subject = 'New Contact Form Submission';
        $mail->isHTML(true);
        $mail->Body = '
        <div style="
          max-width:600px;
          margin:0 auto;
          font-family:Arial,sans-serif;
          border:1px solid #e0e0e0;
          border-radius:8px;
          box-shadow:0 2px 6px rgba(0,0,0,0.1);
          overflow:hidden;">
          <div style="background:#28a745; color:#fff; padding:15px; text-align:center;">
            <h2 style="margin:0; font-size:22px;">Contact Form Details</h2>
          </div>
          <div style="padding:20px; background:#fafafa;">
            <p><b>Name:</b> '.$name.'</p>
            <p><b>Email:</b> '.$email.'</p>
            <p><b>Phone:</b> '.$phone.'</p>
            <div style="margin-top:15px; padding:15px; background:#fff; border:1px solid #ddd; border-radius:5px;">
              <b>Message:</b><br>'.nl2br($message).'
            </div>
          </div>
          <div style="background:#f1f1f1; padding:10px; text-align:center; font-size:12px; color:#555;">
            This email was sent from your contact form.
          </div>
        </div>';

    } else {
        // Career form fields
        $first_name       = $_POST['first_name'] ?? '';
        $last_name        = $_POST['last_name'] ?? '';
        $mobile           = $_POST['mobile'] ?? '';
        $email            = $_POST['email'] ?? '';
        $gender           = $_POST['gender'] ?? '';
        $service          = $_POST['service'] ?? '';
        $dob              = $_POST['dob'] ?? '';
        $experience       = $_POST['experience'] ?? '';
        $current_salary   = $_POST['current_salary'] ?? '';
        $expected_salary  = $_POST['expected_salary'] ?? '';
        $location         = $_POST['location'] ?? '';
        $message          = $_POST['message'] ?? '';

        // File upload (resume)
        $resumeName  = $_FILES['resume']['name'] ?? '';
        $resumeTmp   = $_FILES['resume']['tmp_name'] ?? '';
        $resumeSize  = $_FILES['resume']['size'] ?? 0;

        $mail->setFrom($email, $first_name . ' ' . $last_name);
        $mail->addAddress('sdev70817@gmail.com', 'Dev career form');
        $mail->Subject = 'New Career Form Submission';

        // attach resume
        if ($resumeTmp && $resumeSize > 0) {
            $mail->addAttachment($resumeTmp, $resumeName);
        }

        $mail->isHTML(true);
        $mail->Body = '
        <div style="
          max-width:600px;
          margin:0 auto;
          font-family:Arial,sans-serif;
          border:1px solid #e0e0e0;
          border-radius:8px;
          box-shadow:0 2px 6px rgba(0,0,0,0.1);
          overflow:hidden;">
          <div style="background:#007bff; color:#fff; padding:15px; text-align:center;">
            <h2 style="margin:0; font-size:22px;">Career Form Details</h2>
          </div>
          <div style="padding:20px; background:#fafafa;">
            <p><b>First Name:</b> '.$first_name.'</p>
            <p><b>Last Name:</b> '.$last_name.'</p>
            <p><b>Mobile:</b> '.$mobile.'</p>
            <p><b>Email:</b> '.$email.'</p>
            <p><b>Gender:</b> '.$gender.'</p>
            <p><b>Service:</b> '.$service.'</p>
            <p><b>Date of Birth:</b> '.$dob.'</p>
            <p><b>Years of Experience:</b> '.$experience.'</p>
            <p><b>Current Salary:</b> '.$current_salary.'</p>
            <p><b>Expected Salary:</b> '.$expected_salary.'</p>
            <p><b>Current Location:</b> '.$location.'</p>
            <div style="margin-top:15px; padding:15px; background:#fff; border:1px solid #ddd; border-radius:5px;">
              <b>Message:</b><br>'.nl2br($message).'
            </div>
          </div>
          <div style="background:#f1f1f1; padding:10px; text-align:center; font-size:12px; color:#555;">
            This email was sent from your career form.
          </div>
        </div>';
    }

    $mail->send();
    echo "<script>alert('✅ Form submitted successfully!');window.history.back();</script>";

} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
