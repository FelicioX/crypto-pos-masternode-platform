<?php
include("../seguranca.php");
include("../conn_db.php");
include("../fnc.php");
$tip = $_POST;

$query = "SELECT * FROM car_dep WHERE id = '" . $tip['coins'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

$query = "SELECT * FROM `" . $row['moeda'] . "` WHERE nome = '" . $_SESSION['usuarioNome'] . "'";
$result = mysqli_query($conect, $query);
$row2 = mysqli_fetch_assoc($result);

$query = "SELECT * FROM usuarios WHERE id = '" . $tip['users'] . "'";
$result = mysqli_query($conect, $query);
$row3 = mysqli_fetch_assoc($result);

$saldo = $row2['moedas'];
$tips = $tip['qnt'];

$retorno['mensagem'] = '';
$retorno['footer'] = '';

if($tips > $saldo){
	$retorno['footer'] = '<button class="btn btn-primary" type="button" data-dismiss="modal">OK</button>';
	$retorno['mensagem'] = 'Your balance is not enough to complete this operation.';
}else{
	if($tips <= 0){
		$retorno['footer'] = '<button class="btn btn-primary" type="button" data-dismiss="modal">OK</button>';
		$retorno['mensagem'] = 'The amount must be greater than zero.';
	}else{
		$retorno['footer'] = '<button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="button" data-dismiss="modal" onClick="confirmaTip()">Confirm</button>';
		$retorno['mensagem'] = '<img width="128" height="128" src="images/coinlogos/' . $row["moeda"] . '.png" /></br><b>Coin:</b> ' . $row['nome'] . '</br><b>Amount:</b> ' . number_format($tips, 8) . '</br><b>To:</b> ' . $row3['nome'];
	}
}
echo json_encode($retorno);
?>