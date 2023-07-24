<?php

//inicia a busca do email
include_once 'conexao.php';
$email = filter_input(INPUT_POST, 'aluemail');
$query = "select * from alunos where aluemail = '$email';";
$result = mysqli_query($conect, $query);
//$rowalu = mysqli_num_rows($result);
while ($lista = mysqli_fetch_assoc($result)) {
    $aluid = $lista['aluid'];
    $alunome = utf8_encode($lista['alunome']);
    $aluemail = utf8_encode($lista['aluemail']);
    $alurecupera = $lista['alurecupera'] . "-" . $aluid;
}

//$email_servidor = "mail.fetecpiraju.com.br";
//$de = "avaliacao@fetecpiraju.com.br";
//$para = $aluemail;
//$mensagem = "Seu código de recuperação é " . $alurecupera ."<br>" . "clique no link para alterar a sua senha ";
//$assunto = "Código para recuperação de senha. Favor não responder.";
////mail($para,$assunto,$mensagem);
//mail($para, $assunto, $mensagem);
//header('Location: mensagem.php');
//require("home/usuario/diretoriodeinstalação/PHPMailer-master/src/PHPMailer.php");
//require("home/usuario/diretoriodeinstalação/PHPMailer-master/src/SMTP.php");
// $mail = new PHPMailer\PHPMailer\PHPMailer();
// $mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
// $mail->SMTPAuth = true; // authentication enabled
// $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
// $mail->Host = "servidor.hostgator.com.br";
// $mail->Port = 465; // or 587
// $mail->IsHTML(true);
// $mail->Username = "avaliacao@fetecpiraju.com.br";
// $mail->Password = "fetec69avaliacao";
// $mail->SetFrom("avaliacao@fetecpiraju.com.br");
// $mail->Subject = "Código para recuperação de senha. Favor não responder.";
// $mail->Body = "Seu código de recuperação é " . $alurecupera ."<br>" . "clique no link para alterar a sua senha";
// $mail->AddAddress($aluemail);
//    if(!$mail->Send()) {
//       echo "Mailer Error: " . $mail->ErrorInfo;
//    } else {
//       echo "Mensagem enviada com sucesso";
//    }
//    
    // Dados de Envio
$email_enviar = $EMAIL;
$assunto = "Você foi Cadastrado no SGPTA";

// Cabeçalho do Email
$cabecalho = 'MIME-Version: 1.0' . "\r\n";
$cabecalho .= 'Content-type: text/html; charset=iso-8859-1;' . "\r\n";
$cabecalho .= "Return-Path: $email_enviar \r\n";
$cabecalho .= "From: naoresponder@pi.omegapiraju.com.br \r\n";
$cabecalho .= "Reply-To: $email_enviar \r\n";

// Corpo do Email
$mensagem = "<h1>Olá, você foi cadastrado no SGPTA para receber informações e projetos automotivos.</h1>";
$mensagem .= "Para conferir acesse <b><a href=\"https://pi.omegapiraju.com.br\">https://pi.omegapiraju.com.br</a></b>, use seu e-mail: $email_enviar e sua senha: $SENHA <br />";
$mensagem .= "Att. <br /> <b>Projeto Integrador</b>";
// Envia o Email
if(mail($email_enviar, $assunto, $mensagem, $cabecalho))
{
//echo "<br>Mensagem enviada com sucesso.";
}
else
{
//echo "<br>Sua mensagem não pode ser enviada. Tente novamente.";
}

    
    
?>