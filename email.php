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

$sql = "INSERT INTO resposta(nome, email, motivo, mensagem, veio) VALUES ('$nome', '$email', '$motivo', '$mensagem', '$como_chegou') ";
$query = $mysqli -> query($sql);
// Substitua estas variáveis por valores seguros
$smtpHost = 'smtp.desapegagou1.com.br';
$smtpUser = 'admin@desapegagou1.com.br';
$smtpPassword = 'Juliojcgc@123'; // Considere usar uma abordagem mais segura para armazenar essa senha

$mail = new PHPMailer(true);
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
try {
    //Configurações do servidor
    $mail->isSMTP();                                          
    $mail->Host = $smtpHost; 
    $mail->SMTPAuth = true;                                  
    $mail->Username = $smtpUser;                
    $mail->Password = $smtpPassword;                            
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
    $mail->Port = 587;                                    

    // Remetentes e destinatários
    $mail->setFrom('admin@desapegagou1.com.br', 'Templon');
    $mail->addAddress('jcgcampana@gmail.com');     

    // Conteúdo do e-mail
    $mail->isHTML(true);                                  
    $mail->Subject = 'Contato via site';
    $mail->Body    = "<!DOCTYPE html>
    <html>
    <head>
        <title>Contato via Site</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f0f0f0;
                padding: 40px;
            }
            .container {
                max-width: 600px;
                margin: auto;
                background: #ffffff;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.2);
                border: 1px solid #ddd;
            }
            h2 {
                color: #0275d8;
                border-bottom: 2px solid #0275d8;
                padding-bottom: 10px;
            }
            p {
                line-height: 1.6;
                color: #555;
            }
            .footer {
                text-align: center;
                margin-top: 20px;
                font-size: 0.8em;
                color: #aaa;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Contato Recebido</h2>
            <p><strong>Nome:</strong> {$nome}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Motivo:</strong> {$motivo}</p>
            <p><strong>como nos achou:</strong> {$como_chegou}</p>
            <p><strong>Mensagem:</strong></p>
            <p>{$mensagem}</p>
            <div class='footer'>
                Obrigado por entrar em contato conosco!
            </div>
        </div>
    </body>
    </html>
    
    ';"; // Seu HTML aqui

    $mail->send();
    
    // Defina essas variáveis corretamente
    $email = 'destinatario@example.com';
    $tipo = 'tipo_de_usuario';

    // Certifique-se de não ter saídas (echo, var_dump, etc.) antes desta linha
 
} catch (Exception $e) {
    // Em um ambiente de produção, considere logar este erro em vez de exibir
    echo "Mensagem não pôde ser enviada.";
}


}



header("location: index.php");


?>