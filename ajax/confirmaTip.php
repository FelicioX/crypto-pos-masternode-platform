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
$tipper = mysqli_fetch_assoc($result);

$query = "SELECT * FROM usuarios WHERE id = '" . $tip['users'] . "'";
$result = mysqli_query($conect, $query);
$row3 = mysqli_fetch_assoc($result);

$query = "SELECT * FROM `" . $row['moeda'] . "` WHERE nome = '" . $row3['nome'] . "'";
$result = mysqli_query($conect, $query);
$tiped = mysqli_fetch_assoc($result);

$saldo = $tipper['moedas'];
$tips = $tip['qnt'];

$saldo -= $tips;

if(isset($tiped['moedas'])){
	$saldo_tiped = $tiped['moedas'] + $tips;
	$query = "UPDATE `" . $row['moeda'] . "` SET moedas = '" . $saldo_tiped . "' WHERE nome = '" . $row3['nome'] . "'";
	$result = mysqli_query($conect, $query);
}else{
	$saldo_tiped = $tips;
	$query = "INSERT INTO `" . $row['moeda'] . "` (nome,moedas) VALUES ('" . $row3['nome'] . "','" . $saldo_tiped . "')";
	$result = mysqli_query($conect, $query);
}

$query = "UPDATE `" . $row['moeda'] . "` SET moedas = '" . $saldo . "' WHERE nome = '" . $tipper['nome'] . "'";
$result = mysqli_query($conect, $query);

$query = "INSERT INTO tips (de,para,moeda,qnt) VALUES ('" . $tipper['nome'] . "','" . $row3['nome'] . "','" . $row['moeda'] . "','" . $tips . "')";
$result = mysqli_query($conect, $query);

$resposta['coin'] = $row['nome'];
$resposta['para'] = $row3['nome'];
$resposta['qnt'] = number_format($tips, 8,'.','');
$resposta['saldo'] = number_format($saldo, 8,'.','');
$resposta['mytips'] = tabelaMyTips();

echo json_encode($resposta);

?>