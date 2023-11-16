<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $mensagem = isset($_POST["mensagem"]) ? $_POST["mensagem"] : '';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '58afd234b6d628';
        $mail->Password = '9fbc1fd566d452';

        $mail->setFrom('testetrabalho012@gmail.com', 'Your Name'); 
        $mail->addAddress('aleatorio@gmail.com', 'Recipient Name'); 
        $mail->Subject = 'PIRATE BURGUER'; 

        $mail->isHTML(true);
        $mail->Body = "Nome: $nome <br> E-mail: $email <br> Mensagem: $mensagem";

        $mail->send();
        echo 'E-mail enviado com sucesso.';
    } catch (Exception $e) {
        echo "Erro: {$mail->ErrorInfo}";
        error_log("Error: {$mail->ErrorInfo}");
    }
}
?>


