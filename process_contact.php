<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $company = htmlspecialchars(strip_tags($_POST['company']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $phone = htmlspecialchars(strip_tags($_POST['phone']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Simple Validation
    if (empty($name) || empty($email) || empty($message)) {
        // Redirect back with error (in a real app, you'd pass the error or old input)
        header("Location: contact.php?status=error");
        exit;
    }

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);



    try {
        // Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'vijayotaradi118@gmail.com';            // SMTP username
        $mail->Password   = 'xqgndnbabadlrddt';               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable implicit TLS encryption
        $mail->Port       = 587;                                    // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom('vijayotaradi118@gmail.com', 'AMC Website Contact'); // Sender (usually same as SMTP user for Gmail)
        $mail->addAddress('vijayotaradi118@gmail.com');             // Add a recipient
        if (!empty($email)) {
            $mail->addReplyTo($email, $name);                       // Add reply-to from form
        }

        // Content
        $mail->isHTML(true);                                       // Set email format to HTML or Plain Text
        $mail->Subject = "New Contact Inquiry from " . $name;
        
        $body = "You have received a new inquiry.\n\n";
        $body .= "Name: " . $name . "\n";
        $body .= "Company: " . $company . "\n";
        $body .= "Email: " . $email . "\n";
        $body .= "Phone: " . $phone . "\n";
        $body .= "Message:\n" . $message . "\n";
        $mail->Subject = "New Engineering Inquiry  AMC Website";

$body = '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>New Inquiry</title>
</head>

<body style="margin:0; padding:0; background:#f2f4f7; font-family:Roboto, Open Sans, Arial, sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
<tr>
<td align="center">

<!-- Main Container -->
<table width="620" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:6px; box-shadow:0 4px 16px rgba(0,0,0,0.08); overflow:hidden;">

<!-- Header -->
<tr>
<td style="background:#0a1f44; padding:22px 30px;">
<h2 style="margin:0; color:#ffffff; font-family:Poppins, Montserrat, Arial, sans-serif; letter-spacing:0.5px;">
AMC Engineering Solutions
</h2>
<p style="margin:6px 0 0; color:#cfd8e3; font-size:14px;">
Industrial Automation & Engineering Services
</p>
</td>
</tr>

<!-- Content -->
<tr>
<td style="padding:28px 30px; color:#2c2c2c; font-size:15px; line-height:1.6;">
<p>You have received a new technical inquiry via your website.</p>

<table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse; margin-top:18px;">
<tr style="background:#f5f7fa;">
<td width="32%"><strong>Name</strong></td>
<td>' . $name . '</td>
</tr>
<tr>
<td><strong>Company</strong></td>
<td>' . $company . '</td>
</tr>
<tr style="background:#f5f7fa;">
<td><strong>Email</strong></td>
<td>' . $email . '</td>
</tr>
<tr>
<td><strong>Phone</strong></td>
<td>' . $phone . '</td>
</tr>
</table>

<!-- Message -->
<div style="margin-top:24px;">
<h4 style="margin-bottom:10px; font-family:Poppins, Montserrat, Arial, sans-serif; color:#0a1f44;">
Requirement Description
</h4>
<div style="background:#f5f7fa; padding:16px; border-left:4px solid #00a3e0;">
' . nl2br($message) . '
</div>
</div>

</td>
</tr>

<!-- Footer -->
<tr>
<td style="background:#eef1f5; padding:16px; text-align:center; font-size:13px; color:#6c757d;">
This inquiry was generated from the AMC website contact form.<br>
<span style="color:#ff8c00;">Engineering Trust • Automation Excellence</span>
</td>
</tr>

</table>
<!-- End Container -->

</td>
</tr>
</table>
</body>
</html>
';

$mail->Body = $body;
       
$mail->Body = $body;
;

        $mail->send();
        
        // Success Log
        $logEntry = date('Y-m-d H:i:s') . " | From: $name | Status: Sent (PHPMailer)\n";
        file_put_contents('inquiries.log', $logEntry, FILE_APPEND);
        
        header("Location: contact.php?status=success");
        exit;
    } catch (Exception $e) {
        // Error Log
        $logEntry = date('Y-m-d H:i:s') . " | From: $name | Status: Failed (PHPMailer) | Error: {$mail->ErrorInfo}\n";
        file_put_contents('inquiries.log', $logEntry, FILE_APPEND);
        
        // Redirect with error (optionally pass error message if needed, but keeping it simple)
        header("Location: contact.php?status=error");
        exit;
    }
} else {
    // If someone tries to access this file directly
    header("Location: contact.php");
    exit;
}
?>
