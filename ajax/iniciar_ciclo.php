<?php

include("../conn_db.php");
include('../fnc.php');

$moeda = $_POST;

$query = "SELECT * FROM `" . $moeda['moeda'] . "`";
$result = mysqli_query($conect, $query);

$total = 0;
foreach($result as $key => $row){
	if($row['moedas'] > 0){
		if($row['coinvestidor'] == ''){
			$participantes[$row['nome']]['moedas'] = $row['moedas'];
			$total += $row['moedas'];
		}else{
			$query_co = "SELECT * FROM cor_clientes WHERE corretor = '" . $row['nome'] . "' AND nome = '" . $row['coinvestidor'] . "'";
			$result_co = mysqli_query($conect, $query_co);
			$co_dados = mysqli_fetch_assoc($result_co);
			$participantes[$row['nome'] . "||" . $row['coinvestidor']]['moedas'] = $row['moedas'];
			$participantes[$row['nome'] . "||" . $row['coinvestidor']]['fee'] = $co_dados['fee'];
			$total += $row['moedas'];
		}
	}elseif($row['nome'] == 'psbr'){
		$participantes[$row['nome']]['moedas'] = $row['moedas'];
		$total += $row['moedas'];
	}
}
$porc = 0;

foreach($participantes as $key => $row){
	$participantes[$key]['part'] = $row['moedas'] / $total;
	
}

$query = "INSERT INTO ciclos (moeda,ciclo,participantes) VALUES ('" . $moeda['moeda'] . "', '" . $moeda['ciclo'] . "', '" . json_encode($participantes) . "')";
$result = mysqli_query($conect, $query);


function arredondado ($numero, $decimais) { 
   $fator = pow(10, $decimais); 
   return (round($numero*$fator)/$fator); }
   
echo tabelaCiclos();

?>
