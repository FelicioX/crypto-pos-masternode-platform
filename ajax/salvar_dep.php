<?php 
include("../seguranca.php");
include('../conn_db.php');
include('../fnc.php');

$dep = $_POST;

if($dep['qn'] == ''){
	exit(1);
}
if($dep['tx'] == ''){
	exit(2);
}

$query = "UPDATE depositos SET status = 0 , qnt='" . $dep['qn'] . "', txid='" . $dep['tx'] . "' WHERE id=" . $dep['id'];
$result = mysqli_query($conect, $query);

$query = "SELECT * FROM depositos WHERE `id` = '" . $dep['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

$retorno['detalhes'] = "<p>Investidor: <b>" . $row['investidor'] . "</b></br>";
if($row['coinvestidor'] == ''){
	
}else{
	$retorno['detalhes'] .= "Co-Investidor: <b>" . $row['coinvestidor'] . "</b></br>";
}
$retorno['detalhes'] .= "Discord: " . $row['discord'] . "<br>
		Moeda: " . $row['moeda'] . "<br>
		Quantia: " . $row['qnt'] . "<br>
		Txid: " . $row['txid'] . "<br>
		Data: " . $row['data'] . "</p>";
$retorno['detalhes'] .= 'Observações: ' . $row['obs'] . '</p>';
$retorno['detalhes'] .= "<button onclick='corrigirDep(" . $row['id'] . ")' class='btn btn-default'>Corrigir</button> <button onclick='deletarDep(" . $row['id'] . ")' data-dismiss='modal' class='btn btn-default'>Deletar</button>";

$retorno['tabela'] = tabelaHistDep(5, $_SESSION['usuarioLogin']);

$retorno['detalhes'] .= "
<script>
$('#mtitulo').html('Detalhes');
function corrigirDep(x){
	var mm = {id:x};
	var dados = mm;
	$('#mtitulo').html('Atualizar Depósito');
	$.ajax({
		
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/userget_dep.php',
		async: true,
		data: dados,
		success: function(response) {
			$('#mbody').html(response);
		}
	});
}
function deletarDep(x){
	
	var mm = {id:x};
	var dados = mm;
	$.ajax({
		
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/deleta_dep.php',
		async: true,
		data: dados,
		success: function(response) {
			$('#hist_dep').html(response);
		}
	});
}
</script>";

echo json_encode($retorno);