<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
include("ajax/crypt.php");
protegePagina(); // Chama a função que protege a página

$saque = $_POST;

$segc = ecrypta($saque['cds']);

	$query = "INSERT INTO saques (investidor,moeda,qnt,carteira,status) VALUES ('" . $_SESSION['usuarioNome'] . "', '" . $saque["moeda"] . "', '" . $saque["qnt"] . "', '" . $saque["carteira"] . "',0)";
	$insert = mysqli_query($conect, $query);


header("Location: ".$_SG['paginaDashboard']);
?>