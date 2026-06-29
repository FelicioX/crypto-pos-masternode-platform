<?php
include("../conn_db.php");
include("../fnc.php");
//moeda, ciclo, qnt, txid, id
$bloco = $_POST;

$query = "SELECT * FROM ciclos WHERE id='" . $bloco['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

$query = "SELECT * FROM conf";
$result = mysqli_query($conect, $query);
$conf = mysqli_fetch_assoc($result);

$participantes = json_decode($row['participantes']);

if($bloco['tipo'] == 'stake'){
	$fee = $bloco['qnt'] * ($conf['fee'] / 100);
}else{
	$fee = $bloco['qnt'] * ($conf['fee_mn'] / 100);
}
$qnt_distr = $bloco['qnt'] - $fee;

if($bloco['tipo'] == 'stake'){
	$soma = 0;
	foreach($participantes as $key => $row2){
		$part_moedas[$key]['moedas'] = $row2->part * $qnt_distr;
		$soma += $row2->part * $qnt_distr;
	}

	//$part_moedas['ecostakepool']['moedas'] += $fee;
	$part_moedas['febre']['moedas'] += ($fee * 0.2);
	$part_moedas['Top1']['moedas'] += ($fee * 0.17);
	$part_moedas['FelicioX']['moedas'] += ($fee * 0.2);
	$part_moedas['laurobeleche']['moedas'] += ($fee * 0.1);
	$part_moedas['ecostakepool']['moedas'] += ($fee * 0.23);
    $part_moedas['Marcos Fontenele']['moedas'] += ($fee * 0.1);

	$query = "INSERT INTO block_stakes (moeda,qnt,txid,ciclo,participantes,fee,tipo) VALUES ('" . $bloco['moeda'] . "', '" . $bloco['qnt'] . "', '" . $bloco['txid'] . "', '" . $bloco['ciclo'] . "', '" . json_encode($part_moedas) . "', '" . $fee . "', '" . $bloco['tipo'] . "')";
	$result3 = mysqli_query($conect, $query);
}else{
	$query = "SELECT * FROM mn WHERE id='" . $bloco['mn'] . "'";
	$result4 = mysqli_query($conect, $query);
	$mnnn = mysqli_fetch_assoc($result4);
	$mnode = $mnnn['nome'];
	
	$query = "SELECT * FROM cotas_mn WHERE mn_id='" . $bloco['mn'] . "'";
	$result4 = mysqli_query($conect, $query);
	$colateral = 0;
	//$partici = 0;
	while($row = mysqli_fetch_array($result4)){
		$partici[$row['user_id']] = $row['qnt'];
		$colateral += $row['qnt'];
	}
	$partici[244] = 0;//ecostakepool
	
	$admfee['febre'] = ($fee * 0.2);
	$admfee['Top1'] = ($fee * 0.17);
	$admfee['FelicioX'] = ($fee * 0.2);
	$admfee['laurobeleche'] = ($fee * 0.1);
	$admfee['ecostakepool'] = ($fee * 0.23);
    $admfee['Marcos Fontenele'] = ($fee * 0.1);
	
	foreach($partici as $key => $row){
		if($key != 244){
			$moedas_mn = $qnt_distr * ($row / $colateral);
		}else{
			$moedas_mn = $fee;
		}
		$query1 = "SELECT * FROM usuarios WHERE id = '" . $key . "'";
		$result5 = mysqli_query($conect, $query1);
		$user = mysqli_fetch_assoc($result5);
		
		$query2 = "SELECT * FROM `" . $bloco['moeda'] . "` WHERE nome = '" . $user['nome'] . "'";
		$result6 = mysqli_query($conect, $query2);
		$moedass = mysqli_fetch_assoc($result6);
		
		//$qnt = $moedas_mn + $moedass['moedas'];
		
		if(mysqli_num_rows($result6) > 0){
			$qnt = $moedas_mn + $moedass['moedas'];
			$query3 = "UPDATE `" . $bloco['moeda'] . "` SET moedas = '" . $qnt . "' WHERE id = '" . $moedass['id'] . "'";
			$result7 = mysqli_query($conect, $query3);
		}else{
			$qnt = $moedas_mn;
			$query3 = "INSET INTO `" . $bloco['moeda'] . "` (nome,moedas) VALUES ('" . $user['nome'] . "','" . $qnt . "')";
			$result7 = mysqli_query($conect, $query3);
		}
		
		$p[$user['nome']]['moedas'] = $moedas_mn;
	}
	foreach($admfee as $key => $row){
		$query2 = "SELECT * FROM `" . $bloco['moeda'] . "` WHERE nome = '" . $key . "'";
		$result6 = mysqli_query($conect, $query2);
		$moedass = mysqli_fetch_assoc($result6);
		if(mysqli_num_rows($result6) > 0){
			$qnt = $row + $moedass['moedas'];
			$query3 = "UPDATE `" . $bloco['moeda'] . "` SET moedas = '" . $qnt . "' WHERE id = '" . $moedass['id'] . "'";
			$result7 = mysqli_query($conect, $query3);
		}else{
			$qnt = $row;
			$query3 = "INSET INTO `" . $bloco['moeda'] . "` (nome,moedas) VALUES ('" . $key . "','" . $qnt . "')";
			$result7 = mysqli_query($conect, $query3);
		}
		
	}
	$query = "INSERT INTO block_stakes (moeda,qnt,txid,participantes,fee,tipo,mn) VALUES ('" . $bloco['moeda'] . "', '" . $bloco['qnt'] . "', '" . $bloco['txid'] . "', '" . json_encode($p) . "', '" . $fee . "', '" . $bloco['tipo'] . "', '" . $mnode . "')";
	$result3 = mysqli_query($conect, $query);
}

//refaz tabela
echo tabelaCicloDetalhes($bloco['id']);
?>