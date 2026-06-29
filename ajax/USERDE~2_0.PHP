<?php
include('../conn_db.php');

$saq = $_POST;

$query = "SELECT * FROM saques WHERE `id` = '" . $saq['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

echo "<p>Investidor: <b>" . $row['investidor'] . "</b></br>";
if($row['coinvestidor'] == ''){
	
}else{
	echo "Co-Investidor: <b>" . $row['coinvestidor'] . "</b></br>";
}
echo "Moeda: " . $row['moeda'] . "<br>
		Quantia: " . $row['qnt'] . "<br>
		Txid: " . $row['txid'] . "<br>
		Data: " . $row['data'] . "</p>";
echo 'Observações: ' . $row['obs'] . '</p>';
if($row['status'] != 1){
	echo "<button onclick='corrigirSaq(" . $row['id'] . ")' class='btn btn-default'>Corrigir</button> <button onclick='deletarSaq(" . $row['id'] . ")' data-dismiss='modal' class='btn btn-default'>Deletar</button>";
}
?>
<script>
function corrigirSaq(x){
	var mm = {id:x};
	var dados = mm;
	$('#mtitulo').html('Atualizar Saque');
	$.ajax({
		
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/userget_saq.php',
		async: true,
		data: dados,
		success: function(response) {
			$('#mbody').html(response);
		}
	});
}
function deletarSaq(x){
	
	var mm = {id:x};
	var dados = mm;
	$.ajax({
		
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/deleta_saq.php',
		async: true,
		data: dados,
		success: function(response) {
			$('#hist_saq').html(response);
		}
	});
}
</script>