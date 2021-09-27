<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$body = $_POST ['body'];


require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '27478b0a76996c';
    $mail->Password = '021cda1509a77c';
    //Recipients
    $mail->setFrom('stevenvegas916@gmail.com', 'steven vegas');
    $mail->addAddress('stevenvegas916@gmail.com', 'Steven vegas');
    $mail->addCC('steven.vandergaag@ictmbo.nl');





    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // create a log channel
    $log = new Logger('info.log');
    $log->pushHandler(new StreamHandler('info.log', Logger::WARNING));

// add records to the log


    $log->warning($name . $body );
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    $log = new Logger('info.log');
    $log->pushHandler(new StreamHandler('info.log', Logger::WARNING));
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $log->error('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');

}