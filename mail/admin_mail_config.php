<?php
///////////////////////////////////////////////////

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './mail/PHPMailer/src/Exception.php';
require './mail/PHPMailer/src/PHPMailer.php';
require './mail/PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = 'mail.mnvc.com.ng';
$mail->Port = 465;//587;
$mail->SMTPSecure = "ssl";//'tls';

$mail->SMTPAuth = true;
$mail->Username = 'dragon@mnvc.com.ng'; //your username
$mail->Password = 'Mnvc.com'; //your password

$mail->setFrom("dragon@mnvc.com.ng", "Victor Charles dragon"); //Sender email address & name

if ($receiver["customer"] == "notsent"){
  $mail->addAddress("$customerEmail", "$customerName"); //Recipient email address

  ////////////////////////// FIND EMAIL BODY AND SUBJECT ON PAGES
  $mail->Subject = $subject;
  $mail->Body = $emailBody;
  $mail->isHTML(true);

  if($mail->send()) {
      $status = TRUE;
      $receiver["customer"] = "sent";
  } else {
      $status = FALSE;// . $mail->ErrorInfo;
      $receiver["customer"] = "notsent";
  }

}

if ($receiver["admin"] == "notsent"){
  $mail->addAddress("dragon@mnvc.com.ng", "Victor Charles dragon"); //Recipient email address

  ////////////////////////// FIND EMAIL BODY AND SUBJECT ON PAGES
  $mail->Subject = $subject;
  $mail->Body = $emailBody;
  $mail->isHTML(true);

  if($mail->send()) {
      $status = TRUE;
      $receiver["admin"] = "sent";
  } else {
      $status = FALSE;// . $mail->ErrorInfo;
      $receiver["admin"] = "notsent";
  }

}
?>
