<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
include('conn_db.php');
$form = $_POST;
$tipo = $_GET['tipo'];

if($tipo == "saque"){
	$response["input"] = '<input type="submit" id="confima" value="Confirma" class="btn btn-success"/>';
		echo json_encode($response);
	
}else{
	if($form['qnt'] != "" && $form['txid'] != ""){
	
		$response["input"] = '<input type="submit" id="confima" value="Confirma" class="btn btn-success"/>';
		$response['campo'] = "Preenchido";
		if($form['qnt'] == ""){
			$response['qnt'] = false;
		}else{
			$response['qnt'] = true;
		}
		if($form['txid'] == ""){
			$response['txid'] = false;
		}else{
			$response['txid'] = true;
		}
		echo json_encode($response);
	}else{
		$response["input"] = '<input type="submit" id="confima" value="* campos vazios" class="btn btn-secondary" disabled />';
		$response['campo'] = "Não foi preenchido";
		if($form['qnt'] == ""){
			$response['qnt'] = false;
		}else{
			$response['qnt'] = true;
		}
		if($form['txid'] == ""){
			$response['txid'] = false;
		}else{
			$response['txid'] = true;
		}
		
		
		echo json_encode($response);
	}
}
	


?>
