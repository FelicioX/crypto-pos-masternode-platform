<?php
include("../conn_db.php");
include('../fnc.php');

$ciclo = $_POST;

$query = "UPDATE ciclos SET fim = now() WHERE id = " . $ciclo['id']; 
$result = mysqli_query($conect, $query);
$query = "SELECT * FROM block_stakes WHERE ciclo = " . $ciclo['ciclo'] . " AND moeda = '" . $ciclo['moeda'] . "'";
$result = mysqli_query($conect, $query);
while($row = mysqli_fetch_array($result)){
	$participantes = json_decode($row['participantes']);
	foreach($participantes as $key => $u){
		if(!isset($stakes[$key])){
			$stakes[$key] = 0;
		}
		$stakes[$key] += $u->moedas;
		
	}
}


$query = "SELECT * FROM `" . $ciclo['moeda'] . "`";
$result2 = mysqli_query($conect, $query);

while($row3 = mysqli_fetch_array($result2)){
	if($row3['coinvestidor'] != ''){
		$users[$row3['nome'] . "||" . $row3['coinvestidor']] = $row3['moedas'];
	}else{
		$users[$row3['nome']] = $row3['moedas'];
	}
	
}
$query_c = "SELECT * FROM ciclos WHERE id = " . $ciclo['id']; 
$result_c = mysqli_query($conect, $query_c);
$c = mysqli_fetch_assoc($result_c);

$participantes = json_decode($c['participantes']);

foreach($participantes as $key => $row2){
	$coinvestidor = explode('||', $key);
	if(isset($coinvestidor[1])){
		$fee = (double)$stakes[$key] * (double)($row2->fee / 100);
		$moedas = ((double)$stakes - (double)$fee) + (double)$users[$key];
		$query_f = "INSERT INTO cor_fee (corretor,cliente,moeda,ciclo,fee) VALUES ('" . $coinvestidor[0] . "','" . $coinvestidor[1] . "','" . $c['moeda'] . "','" . $c['ciclo'] . "','" . $fee . "')";
		$r = mysqli_query($conect, $query_f);
		
		$query_f = "UPDATE `" . $ciclo['moeda'] . "` SET moedas = moedas + " . (double)$fee . " WHERE nome = '" . $coinvestidor[0] . "'";
		$r = mysqli_query($conect, $query_f);

		$query = "UPDATE `" . $ciclo['moeda'] . "` SET moedas = '" . $moedas . "' WHERE nome = '" . $coinvestidor[0] . "' AND coinvestidor = '" . $coinvestidor[1] . "'";
	}else{
		if(!isset($stakes[$key])){
			$stakes[$key] = 0;
		}
		$moedas = (double)$stakes[$key] + (double)$users[$key];
		$query = "UPDATE `" . $ciclo['moeda'] . "` SET moedas = '" . $moedas . "' WHERE nome = '" . $key . "' AND coinvestidor = ''";
	}
	
	$result2 = mysqli_query($conect, $query);
	
	
}
echo tabelaCiclos();
?>