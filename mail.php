<?php

echo $_POST['name'] . $_POST['email'] , $_POST['subject'] . $_POST['comment'];
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'help.justtravel@gmail.com';
$mail->Password = 'justtravel123';
$mail->setFrom($_POST['email']);
$mail->addAddress('help.justtravel@gmail.com',$_POST['name']);
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['comment'];
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}
