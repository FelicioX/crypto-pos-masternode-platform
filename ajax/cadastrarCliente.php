<?php
include("../conn_db.php");

$cliente = $_POST;

$query = "SELECT * FROM cor_clientes WHERE corretor = '" . $cliente['corretor'] . "' AND nome = '" . $cliente['nome'] . "'";
$result = mysqli_query($conect, $query);

if(mysqli_num_rows($result) == 0){
	$query = "INSERT INTO cor_clientes (corretor, nome, fee) VALUES ('" . $cliente['corretor'] . "', '" . $cliente['nome'] . "', '" . $cliente['fee'] . "')";
	$result = mysqli_query($conect, $query);
	if($result){
		$resposta['status'] = "Cliente cadastrado com sucesso.";
	}else{
		$resposta['status'] = "Erro ao cadastrar cliente, tente mais tarde.";
	}
}else{
	$resposta['status'] = "Já há um cliente com esse nome cadastrado, tente um nome diferente.";
}

$tabela = "<table><tr><th>Nome</th><th>Fee</th></tr>";
					
$query = "SELECT * FROM cor_clientes WHERE corretor = '" . $cliente['corretor'] . "'";
$result = mysqli_query($conect, $query);
						
if($result == FALSE or mysqli_num_rows($result) < 1){
	$tabela .= "<tr align='center'><td colspan='2'>Você não possui clientes cadastrados.</td></tr>";
}else{
	while($row = mysqli_fetch_array($result)){
		$tabela .= "<tr align='center'><td>" . $row['nome'] . "</td><td>" . $row['fee'] . "%</td></tr>";
	}
}
				
$tabela .= "</table>";

$resposta['tabela'] = $tabela;

echo json_encode($resposta);

?>