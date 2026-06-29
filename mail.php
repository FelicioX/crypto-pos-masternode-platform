<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

	$from = "suporte@ecostakepool.com";

	$to = "laurobeleche@gmail.com";

	$subject = "Verificação de cadastro";
	
	$message = "Olá <br><br>Você está recebendo esse e-mail para a cofirmação de seu cadastro na EcoStake Pool, se você se cadastro, por favor clique no link abaixo para confirmar o seu cadastro./n/nhttps://ecostakepool.com/verificacao.php?login=";

	$headers = "De:". $from;

	mail($to, $subject, $message, $headers);

?>