<?php
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/OAuth.php';
require '../PHPMailer/src/POP3.php';

// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


$mail = new PHPMailer(true);                              
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'vvphuc2030@gmail.com';                 // SMTP username of gmail
    $mail->Password = 'pynvp0ng';                           // SMTP password of gmail
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('vvphuc2030@gmail.com', 'J2teamPYNV'); // provide your gmail username 
    $mail->addAddress();     // Add a recipient


    //Content
    $mail->isHTML(true);                          // Set email format to HTML
     $mail->Subject = 'Register client details and total client details';
     $mail->Body= "Tao là Phúc nè";    //write the html code
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>