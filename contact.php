<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//`true` enables exceptions
$mail = new PHPMailer();

try {
  // $data = file_get_contents('php://input');
  // echo $data;
  // exit;

  $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
  // echo "Request method: " . $request_method;

  if ($request_method === 'POST') {
    $honeypot = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    if ($honeypot) {
      // ignore
      header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
      exit;
    }

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $inputs['name'] = $name;
    if (!$name || trim($name) === '') {
        $errors['name'] = 'Please enter your name';
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $inputs['email'] = $email;
    if ($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!$email) {
            $errors['email'] = 'Please enter a valid email';
        }
    } else {
        $errors['email'] = 'Please enter an email';
    }

    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $inputs['subject'] = $subject;
    if (!$subject || trim($subject) === '') {
        $errors['subject'] = 'Please enter the subject';
    }

    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $inputs['message'] = $message;
    if (!$message || trim($message) === '') {
        $errors['message'] = 'Please enter the message';
    }
    
  } else {
    // Only post is allowed
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
  }

    // echo "<br>get inputs";
    $contact_name = $inputs['name'];
    $contact_email = $inputs['email'];
    $message = $inputs['message'];
    $subject = $inputs['subject'];

    $contact_form_contents = "\nContact name: $contact_name" . "\nContact email: $contact_email" . "\nSubject: $subject" . "\nMessage: $message" . "\n";
    // echo "Contact form: $contact_form_contents";

    // Load the .env file
    $env = file_get_contents('./.env');
    $lines = explode("\n",$env);

    foreach($lines as $line){
      preg_match("/([^#]+)\=(.*)/",$line,$matches);
      if(isset($matches[2])){ putenv(trim($line)); }
    } 

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP();  
    $mail->Host       = getenv('SMTPHOST');
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('SMTPUSER');
    $mail->Password   = getenv('SMTPPWD');
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port       = getenv('SMTPPORT');

    //Recipients
    $mail->setFrom(getenv('FROM'), getenv('FROMNAME'));
    $mail->addAddress(getenv('CONTACTRECIPIENT'), "SwansonSoftware Admin");
    $mail->addReplyTo(getenv('REPLYTO'), getenv('FROMNAME'));


    //Content
    $mail->isHTML(false); 
    $mail->Subject = "Contact Form Submission";
    $mail->Body    = "Contact form contents: $contact_form_contents";


    $mail->send();
    // echo 'Message has been sent';

    header('Location: thankyou.html', true, 303);
    // echo "<br><br>-------------DONE-------------<br><br>";

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

