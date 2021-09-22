<?php
	require 'phpmailer/PHPMailer.php';
	require 'phpmailer/SMTP.php';
	require 'phpmailer/Exception.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	$mail = new PHPMailer();
	$mail->CharSet  = 'UTF-8';
	$mail->isSMTP();
	$name = $_POST['user_name'];
	$text = $_POST['user_text'];
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";
	$mail->Username = "dimas.website69@gmail.com";
	$mail->Password = "89805486002";
	$mail->Subject = "Сообщение с сайта!";
	$mail->setFrom('dimas.website69@gmail.com');
	$mail->isHTML(true);
	$mail->Body = "<h1>$name</h1></br><p>$text</p>";
	$mail->addAddress('dmithry.sidnev.98@mail.ru');
	if ( $mail->send() ) {
		echo "Сообщение отправлено!";
	}else{
		echo "Ошибка: "{$mail->ErrorInfo};
	}
	$mail->smtpClose();