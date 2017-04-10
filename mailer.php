<?php

$email = $_POST['email'];

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'loyola@ensinomed.com.br';
$mail->Password = 'Psiquiatria1979';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('contato@ensinomed.com.br', 'EnsinoMed');
$mail->addAddress ($_POST['email']);
$mail->addReplyTo('contato@ensinomed.com.br', 'Contato');
$mail->addBCC('loyola@ensinomed.com.br');

$mail->isHTML(true);

$mail->Subject = 'Obrigado pelo contato!';
$mail->Body    = 'Sua inscrição foi realizada com sucesso!';
$mail->AltBody = 'Sua inscrição foi realizada com sucesso!';

if(!$mail->send()) {
    echo 'O e-mail não pode ser cadastrado.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'E-mail cadastrado com sucesso.';
}

?>