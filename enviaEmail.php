<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include('include/config.dba.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$conexao = mysql_pconnect($host,$user,$pass);
mysql_select_db($base,$conexao);
$login = @$_POST['login'];
$email = @$_POST['email'];

$sql = "select login_usuario, senha_usuario from usuario where login_usuario='$login' and email_usuario='$email'";
$result_sql = mysql_query($sql,$conexao);
$login1 = mysql_result($result_sql,0,"login_usuario");
$senha = mysql_result($result_sql,0,"senha_usuario");




$mail = new PHPMailer;									  // Passing `true` enables exceptions
	
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tcrestani16@gmail.com';            // SMTP username
    $mail->Password = 'henriqueabc';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email);
    $mail->addAddress($email);     // Add a recipient
   /* $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/    // Optional name

    //Content
    //$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Alteração de Senha';
    $mail->Body    = "Para alterar a senha, Acesse esse Link: 
	\n http://192.168.254.104/PPW%20com%20Bootstrap/alteraSenha.php?l=$login&s=$senha";

   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
	
    //echo "<script> alert('Mensagem enviada com Sucesso');";
	echo "\n <script language=\"JavaScript\">";
	echo "\n alert('Mensagem enviada com Sucesso') <!--";
	echo "\n 	location.href = \"TelaLogin.php\";";
	echo "\n //-->";
	echo "\n </script>";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}