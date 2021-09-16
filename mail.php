<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$text = $_POST['user_text'];

$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               
$mail->Username = 'dimas.site@mail.ru';
$mail->Password = 'C6znbGL3DaaeAxEX4TSD';
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;

$mail->setFrom('dimas.site@mail.ru'); 
$mail->addAddress('dmithry.sidnev.98@mail.ru');     

$mail->Subject = 'Сообщение с моего сайта';
$mail->Body    = '' .$name . ' оставил(а) сообщение.'<br>'Текст:' .$text;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    echo 'Ok';
}
?>
