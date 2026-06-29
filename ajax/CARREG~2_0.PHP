<?php
include("../seguranca.php");

include('../conn_db.php');

$id = $_POST['id'];

$query = "SELECT * FROM ciclos WHERE id = '" . $id . "'";
$result = mysqli_query($conect, $query);
if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_assoc($result);
	
}


$participantes = json_decode($row['participantes']);

$query = "SELECT * FROM block_stakes WHERE moeda = '" . $row['moeda'] . "' AND ciclo = '" . $row['ciclo'] . "'";
$result2 = mysqli_query($conect, $query);
echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
echo "<tr><thead><th style='width: 50px; max-width: 50px;'>ID</th><th style='max-width: 300px;'>Nome</th><th>Balanço Inicial</th><th style='width: 100px; max-width: 100px;'>Part.</th><th>Stake</th><th>Balanço Final</th></tr></thead>";

$tb_linhas = "";
$bfinal = 0;
$n = 1;
$moedas = 0;
while($row2 = mysqli_fetch_array($result2)){
	$moedas += $row2['qnt'];
	
}
$bit = 0;
$bft = 0;
foreach($participantes as $key => $r){
	if($key != $_SESSION['usuarioNome']){
		if($_SESSION['usuarioAdm'] == 1){
			echo "<tr align='center' style='width: 50px;'><td>$n</td><td>". $key . "</td><td>". number_format($r->moedas, 2) . "</td><td>". number_format(($r->part * 100), 2) . "%</td><td>" . number_format(($moedas * $r->part), 2) . "</td><td>". number_format(($r->moedas + ($moedas * $r->part)), 2) . "</td></tr>";
		}
	}else{
		
		echo "<tr align='center' style='background-color: #ffb300'><td>$n</td><td>". $key . "</td><td>". number_format($r->moedas, 2) . "</td><td>". number_format(($r->part * 100), 2) . "%</td><td>" . number_format(($moedas * $r->part), 2) . "</td><td>". number_format(($r->moedas + ($moedas * $r->part)), 2) . "</td></tr>";
	}
	$n++;
	$bit += $r->moedas;
	}
echo "<tr align='center' style='background-color: #468fca; width: 50px;'><td colspan='2'>TOTAL</td><td>" . number_format($bit, 2) . "</td><td>100%</td><td>" . number_format($moedas, 2) . "</td><td>" . number_format(($bit + $moedas), 2) . "</td></tr>";
echo "</table>";

?>