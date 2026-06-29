<?php
include("../conn_db.php");
ini_set('display_errors', 1);

error_reporting(E_ALL);
$email = $_POST['mail'];

$query_select = "SELECT * FROM usuarios WHERE email = '" . $email . "'";
$select = mysqli_query($conect, $query_select);

$row = mysqli_fetch_assoc($select);

$hashpass = hash('ripemd160', $row['nome'] . $row['exibicao'] . $row['email'] . $row['senha']);

$query_update = "UPDATE usuarios SET hashforgot = '" . $hashpass . "' WHERE id = " . $row['id'];
$update = mysqli_query($conect, $query_update);

$from = "suporte@ecostakepool.com";

	$to = $row['email'];

	$subject = "Password recovery";
	
	$message = "<html><head>";
    $message .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
    
	$message .= "</head><body>";
	$message .= "Olá " . $row['exibicao'] . "<br><br>If you have requested a password recovery, please click the link below to register a new password.<br><br><a href='https://ecostakepool.com/newPass.php?hash=" . $hashpass . "'>Change password</a>";

	$message .= "</body></html>";
	
	$headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'To: '.$to;
	$headers[] = "From:". $from;

	$mailsend = mail($to, $subject, $message, implode("\r\n",$headers));
echo $email . "</br>";
echo $hashpass . "</br>";
echo $mailsend . "</br>";
?>