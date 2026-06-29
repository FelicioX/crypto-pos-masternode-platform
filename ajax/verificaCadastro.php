<?php
include("../conn_db.php");

$us = $_POST;


$query_select = "SELECT nome FROM usuarios WHERE nome = '" . $us['usuario'] . "'";
$select = mysqli_query($conect, $query_select);
if(mysqli_num_rows($select) > 0){
	$login = 0;
}else{
	$login = 1;
}
$query_select = "SELECT nome FROM usuarios WHERE email = '" . $us['mail'] . "'";
$select = mysqli_query($conect, $query_select);
if(mysqli_num_rows($select) > 0){
	$email = 0;
}else{
	$email = 1;
	if(validaEmail($us['mail'])){
		
	}else{
		$email = 2;
	}
}
$retorno['login'] = $login;
$retorno['email'] = $email;
$retorno['erro'] = '';
if($login == 0){
	$retorno['mlogin'] = false;
	$retorno['erro'] .= "*Usuário já cadastrado!<br>";
}else{
	$retorno['mlogin'] = true;
}
if($email == 0){
	$retorno['memail'] = false;
	$retorno['erro'] .= "*E-mail já cadastrado!<br>";
}elseif($email == 2){
	$retorno['memail'] = false;
	$retorno['erro'] .= "*Insira um e-mail válido!<br>";
}else{
	$retorno['memail'] = true;
}
if($login == 1 && $email == 1){
	$hashver = hash('ripemd160', $us['usuario'] . $us['exibi'] . $us['mail'] . $us['pass']);
	
	
	$query = "INSERT INTO usuarios (nome,senha,email,exibicao,hashver) VALUES ('" . $us['usuario'] . "','" . MD5($us['pass']) . "','" . $us['mail'] . "','" . $us['exibi'] . "','" . $hashver . "')";
    $insert = mysqli_query($conect, $query);
	
	$retorno['cadastro'] = "Cadastro Efetuado com sucesso!<script>iniciarLogin();</script>";
	$retorno['status'] = true;
	$retorno['login'] = "<script>iniciarLogin();</script>";
	
	$from = "suporte@ecostakepool.com";

	$to = $us['mail'];

	$subject = "Verificação de cadastro";
	
	$message = "<html><head>";
    $message .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
    
	$message .= "</head><body>";
	$message .= "Olá " . $us['exibi'] . "<br><br>Você está recebendo esse e-mail para a cofirmação de seu cadastro na EcoStake Pool, se você se cadastro, por favor clique no link abaixo para confirmar o seu cadastro.<br><br><a href='https://ecostakepool.com/verificacao.php?login=" . $us['usuario'] . "&codigo=" . $hashver . "'>Clique para confirmar seu cadastro</a>";

	$message .= "</body></html>";
	
	$headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'To: '.$to;
	$headers[] = "From:". $from;

	mail($to, $subject, $message, implode("\r\n",$headers));
	
}else{
	$retorno['cadastro'] = "Cadastro não realizado! Corrija os erros e tente novamente.<br>";
	$retorno['status'] = false;
	$erro = $retorno['cadastro'] . $retorno['erro'];
	$retorno['erro'] = $erro;
	
}
echo json_encode($retorno);


function validaEmail($email) {
	$er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
    if (preg_match($er, $email)){
	return true;
    } else {
	return false;
    }
}
?>