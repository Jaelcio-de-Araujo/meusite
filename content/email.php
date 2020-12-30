<?php
include ('PHPMailer/class.phpmailer.php');

//Variaveis do formulário
$email = $_POST['email'];
$nome = $_POST['nome'];
$email_visitante = $_POST['email'];
$telefone = $_POST['telefone'];
$observacoes = $_POST['observacoes'];




$mail = new PHPMailer;
$mail->setLanguage('br');                             // Habilita as saídas de erro em Português
$mail->CharSet='UTF-8';                               // Habilita o envio do email como 'UTF-8'

//$mail->SMTPDebug = 3;                               // Habilita a saída do tipo "verbose"

$mail->isSMTP();                                      // Configura o disparo como SMTP
$mail->Host = 'email-ssl.com.br';                     // Especifica o enderço do servidor SMTP da Locaweb
$mail->SMTPAuth = true;                               // Habilita a autenticação SMTP
$mail->Username = 'eu@jaelcio.com.br';                // Usuário do SMTP
$mail->Password = 'Leonit@10';                        // Senha do SMTP
$mail->SMTPSecure = 'ssl';                            // Habilita criptografia TLS | 'ssl' também é possível
$mail->Port = 465;                                    // Porta TCP para a conexão

$mail->From = 'eu@jaelcio.com.br';                    // Endereço previamente verificado no painel do SMTP
$mail->FromName = 'www.jaelcio.com.br';               // Nome no remetente
$mail->addAddress('eu@jaelcio.com.br','eu@jaelcio.com.br');
$mail->addAddress('jaelcio.contato@yahoo.com.br','jaelcio.contato@yahoo.com.br');      // Acrescente um destinatário

$mail->isHTML(true);                                  // Configura o formato do email como HTML

$mail->Subject = 'Contato pelo site - www.jaelcio.com.br';
$mail->Body    = "O(a) $nome do <b>email</b> $email entrou em contato com a seguinte <b>mensagem:</b> $observacoes<br> eo <b>Telefone:</b> $telefone";
$mail->AltBody = 'Esse é o corpo da mensagem em formato "plain text" para clientes de email não-HTML';

if(!$mail->send()) {
    echo 'A mensagem não pode ser enviada';
    echo 'Mensagem de erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada com sucesso';
}
header("Location: contato.php");