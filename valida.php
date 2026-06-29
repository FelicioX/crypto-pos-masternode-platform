<?php
// Inclui o arquivo com o sistema de segurança
require_once("seguranca.php");
// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Salva duas variáveis com o que foi digitado no formulário
  // Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
  $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
  $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
  // Utiliza uma função criada no seguranca.php pra validar os dados digitados
	if (isset($_POST['g-recaptcha-response'])) {
		$captcha_data = $_POST['g-recaptcha-response'];
	}

	// Se nenhum valor foi recebido, o usuário não realizou o captcha
	if (!$captcha_data) {
		expulsaVisitante();
	}
	$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc2QmwUAAAAAKfLAN-174VF_1J2KWWI8885PidS&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
  if (validaUsuario($usuario, MD5($senha)) == true) {
    // O usuário e a senha digitados foram validados, manda pra página interna
    header("Location: dashboard.php");
  } else {
    // O usuário e/ou a senha são inválidos, manda de volta pro form de login
    // Para alterar o endereço da página de login, verifique o arquivo seguranca.php
    expulsaVisitante();
  }
}
?>