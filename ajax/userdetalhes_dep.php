<?php

include('../conn_db.php');

$dep = $_POST;

$query = "SELECT * FROM depositos WHERE `id` = '" . $dep['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

echo "<p>Investidor: <b>" . $row['investidor'] . "</b></br>";
if($row['coinvestidor'] == ''){
	
}else{
	echo "Co-Investidor: <b>" . $row['coinvestidor'] . "</b></br>";
}
echo "Discord: " . $row['discord'] . "<br>
		Moeda: " . $row['moeda'] . "<br>
		Quantia: " . $row['qnt'] . "<br>
		Txid: " . $row['txid'] . "<br>
		Data: " . $row['data'] . "</p>";
echo 'Observações: ' . $row['obs'] . '</p>';
if($row['status'] != 1){
	echo "<button onclick='corrigirDep(" . $row['id'] . ")' class='btn btn-default'>Corrigir</button> <button onclick='deletarDep(" . $row['id'] . ")' data-dismiss='modal' class='btn btn-default'>Deletar</button>";
}


?>
<script>
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
</script>