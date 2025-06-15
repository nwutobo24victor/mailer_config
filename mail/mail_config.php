<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './mail/PHPMailer/src/Exception.php';
require './mail/PHPMailer/src/PHPMailer.php';
require './mail/PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = 'mail.mnvc.com.ng';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = true;
$mail->Username = 'dragon@mnvc.com.ng'; //your username
$mail->Password = 'Mnvc.com'; //your password
$mail->setFrom("dragon@mnvc.com.ng", "Victor Charles dragon");

$mail->isHTML(true); // Set once

// Load templates
// $emailBody = file_get_contents("customer_email_template.html");
// $emailBodyAdm = file_get_contents("admin_email_template.html");

// Optionally replace dynamic variables
$emailBody = str_replace("{{customer_name}}", $customerName, $emailBody);
$emailBodyAdm = str_replace("{{order_id}}", $orderId ?? 'N/A', $emailBodyAdm);

// Send to customer
if ($receiver["customer"] == "notsent") {
    $mail->addAddress($customerEmail, $customerName);
    $mail->Subject = $subject;
    $mail->Body = $emailBody;

    if ($mail->send()) {
        $receiver["customer"] = "sent";
        $status = true;
    } else {
        $receiver["customer"] = "notsent";
        $status = false;
    }

    $mail->clearAddresses(); // IMPORTANT
}

// Send to admin
if ($receiver["admin"] == "notsent") {
    $mail->addAddress("dragon@mnvc.com.ng", "Victor Charles dragon");
    $mail->Subject = $subject;
    $mail->Body = $emailBodyAdm;

    if ($mail->send()) {
        $receiver["admin"] = "sent";
        $status = true;
    } else {
        $receiver["admin"] = "notsent";
        $status = false;
    }

    $mail->clearAddresses(); // Clean up again
}
?>
