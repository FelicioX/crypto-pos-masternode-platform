<?php 
include("../seguranca.php");
include('../conn_db.php');
include('../fnc.php');
include('crypt.php');
$saq = $_POST;

if($saq['qn'] == ''){
	exit(1);
}

$query = "UPDATE saques SET status = 0 , qnt='" . $saq['qn'] . "', segc = '" . ecrypta($saq['cds']) . "' WHERE id=" . $saq['id'];
$result = mysqli_query($conect, $query);
$retorno['erro'] = $query;

$query = "SELECT * FROM saques WHERE `id` = '" . $saq['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

$detalhes = "<p>Investidor: <b>" . $row['investidor'] . "</b></br>";
if($row['coinvestidor'] == ''){
	
}else{
	$detalhes .= "Co-Investidor: <b>" . $row['coinvestidor'] . "</b></br>";
}
$detalhes .= "Moeda: " . $row['moeda'] . "<br>
		Quantia: " . $row['qnt'] . "<br>
		Txid: " . $row['txid'] . "<br>
		Data: " . $row['data'] . "</p>";
$detalhes .= 'Observações: ' . $row['obs'] . '</p>';
$detalhes .= "<button onclick='corrigirSaq(" . $row['id'] . ")' class='btn btn-default'>Corrigir</button> <button onclick='deletarSaq(" . $row['id'] . ")' data-dismiss='modal' class='btn btn-default'>Deletar</button>";

$tabela = tabelaHistSaq(5, $_SESSION['usuarioLogin']);


$detalhes .= "<script>
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
$retorno['detalhes'] = $detalhes;
$retorno['tabela'] = $tabela;

echo json_encode($retorno); 
?>