<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página

$deposito = $_POST;

//echo $deposito['coinvestidor'];

if($deposito['coinvestidor'] == "sim"){
	$query = "INSERT INTO depositos (investidor,coinvestidor,discord,moeda,qnt,txid,status) VALUES ('" . $_SESSION['usuarioNome'] . "', '" . $deposito["conome"] . "', '" . $deposito["discord"] . "', '" . $deposito["moeda"] . "', '" . $deposito["qnt"] . "', '" . $deposito["txid"] . "',FALSE)";
	$insert = mysqli_query($conect, $query);
}else{
	$query = "INSERT INTO depositos (investidor,discord,moeda,qnt,txid,status) VALUES ('" . $_SESSION['usuarioNome'] . "', '" . $deposito["discord"] . "', '" . $deposito["moeda"] . "', '" . $deposito["qnt"] . "', '" . $deposito["txid"] . "',FALSE)";
	$insert = mysqli_query($conect, $query);
	
}

header("Location: ".$_SG['paginaDashboard']);
?>