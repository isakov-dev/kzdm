<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.kzdm.ru';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'zayavki@kzdm.ru';                     // SMTP username
    $mail->Password   = 'RDL7prXV';                               // SMTP password
    $mail->SMTPSecure = false;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

/*
    $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;
    $mail->isSMTP();
    $mail->Host       = 'smtp.yandex.ru';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'zayavki.kzdm@yandex.ru';
    $mail->Password   = 'skfhjqyzwoturejy';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
*/

    //Recipients
    $mail->setFrom('zayavki@kzdm.ru');
//    $mail->setFrom('zayavki.kzdm@yandex.ru');
    $mail->addAddress('zeidlits@digitalaround.ru');
//    $mail->addAddress('zayavki.kzdm@yandex.ru');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'test';
    $mail->Body    = '<b>in bold!</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}