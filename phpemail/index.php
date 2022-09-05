<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->CharSet="utf-8";

try {
     $mail->SMTPebug = SMTP::DEBUG_SERVER;
     $mail->isSMTP();
     $mail->Host = 'smtp.gmail.com';
     $mail->SMTPAuth = true;
     $mail->Username = 'raqdevs0@gmail.com';
     $mail->Password = 'suasenhageradanacontadogoogle';
     $mail->SMTPSecure = 'tls'; 
     $mail->Port = 587;

     $mail->setFrom('teste@teste');
     $mail->addAddress('teste@teste');

     $mail->isHTML(true);
     $mail->Subject = 'Teste de email via gmail RaqDevs';
     $mail->Body = 'Chegou o email teste do <strong>RaqDevs</strong>';
     $mail->AltBody = 'Chegou o email teste da RaqDevs';

     	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

