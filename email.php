<?php
include("conexao.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
if(isset($_POST['submit'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $motivo = $_POST['motivo'];
    $mensagem = $_POST['mensagem'];
    $como_chegou = $_POST['como_chegou'];

    $sql = "INSERT INTO resposta(nome, email, motivo, mensagem, veio) VALUES ('$nome', '$email', '$motivo', '$mensagem', '$como_chegou')";
    $query = $mysqli->query($sql);

    // Substitua estas variáveis por valores seguros
    $smtpHost = 'smtp.brasonne.com.br';
    $smtpUser = 'Contato@brasonne.com.br';
    $smtpPassword = 'Brasonne@2023'; // Use uma abordagem mais segura para armazenar essa senha

    $mail = new PHPMailer(true);


    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    try {
        // Configurações do servidor
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUser;
        $mail->Password = $smtpPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Usando SSL
        $mail->Port = 587; // Porta SSL

        // Remetentes e destinatários
        $mail->setFrom($smtpUser, 'Brasonne');
        $mail->addAddress('helenevivanjo@gmail.com'); // Supondo que você queira enviar para o mesmo e-mail de contato

    // Conteúdo do e-mail
    $mail->isHTML(true);                                  
    $mail->Subject = 'Contato via site';
    $mail->Body    = "<!DOCTYPE html>
    <html lang='pt'>
    <head>
        <meta charset='UTF-8'>
        <title>Contato via Site</title>
        <style>
            body {
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                background-color: #f4f7f6;
                margin: 0;
                padding: 0;
                color: #333;
            }
            .container {
                max-width: 600px;
                margin: 40px auto;
                background: #ffffff;
                padding: 25px;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            h2 {
                color: #008cba;
                margin-bottom: 20px;
                padding-bottom: 10px;
                border-bottom: 3px solid #e7e7e7;
            }
            p {
                font-size: 16px;
                line-height: 1.5;
                margin: 10px 0;
            }
            .footer {
                text-align: center;
                margin-top: 20px;
                padding-top: 20px;
                border-top: 1px solid #e7e7e7;
                color: #777;
                font-size: 14px;
            }
            a, a:visited {
                color: #008cba;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Contato Recebido</h2>
            <p><strong>Nome:</strong> {$nome}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Motivo:</strong> {$motivo}</p>
            <p><strong>Como nos achou:</strong> {$como_chegou}</p>
            <p><strong>Mensagem:</strong></p>
            <p>{$mensagem}</p>
            <div class='footer'>
                Obrigado por entrar em contato conosco! Visite nosso <a href='https://brasonne.com.br/Brasonne/index.php'>site</a> para mais informações.
            </div>
        </div>
    </body>
    </html>
    
    ';"; // Seu HTML aqui

    $mail->send();
    
    // Defina essas variáveis corretamente
    $email = 'destinatario@example.com';
    $tipo = 'tipo_de_usuario';
    header("location: index.php?td=td");
    // Certifique-se de não ter saídas (echo, var_dump, etc.) antes desta linha
 
} catch (Exception $e) {
    // Em um ambiente de produção, considere logar este erro em vez de exibir
    echo "Mensagem não pôde ser enviada.";
  
}


}






?>