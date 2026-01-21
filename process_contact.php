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


    //  "Username": "vijayotaradi118@gmail.com",
//  "Password": "xqgndnbabadlrddt"
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
        $mail->isHTML(false);                                       // Set email format to HTML or Plain Text
        $mail->Subject = "New Contact Inquiry from " . $name;
        
        $body = "You have received a new inquiry.\n\n";
        $body .= "Name: " . $name . "\n";
        $body .= "Company: " . $company . "\n";
        $body .= "Email: " . $email . "\n";
        $body .= "Phone: " . $phone . "\n";
        $body .= "Message:\n" . $message . "\n";
        
        $mail->Body    = $body;

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
