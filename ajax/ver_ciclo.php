<?php
include('../conn_db.php');

$moeda = $_POST;

$query = "SELECT * FROM ciclos WHERE `moeda` = '" . $moeda['moeda'] . "' ORDER BY `id` DESC LIMIT 1";
$result = mysqli_query($conect, $query);

if($result == false || mysqli_num_rows($result) == 0){
	echo "Deseja iniciar o ciclo 1 para " . $moeda['moeda'] . "?</br>";
	echo "<p><button class='btn btn-default' onClick='iniciaCiclo(";
	echo '"' . $moeda['moeda'] . '", "1")';
	echo "' data-dismiss='modal'>SIM</button> <button class='btn btn-default' data-dismiss='modal'>NÃO</button>";
}else{
	$row = mysqli_fetch_assoc($result);
	if($row['fim'] == 0){
		echo "Ciclo " . $row['ciclo'] . " em andamento, um novo não pode ser iniciado até que esse seja encerrado.";
	}else{
		echo "Deseja iniciar o ciclo " . ($row['ciclo'] + 1) . " para " . $moeda['moeda'] . "?</br>";
		echo "<p><button class='btn btn-default' onClick='iniciaCiclo(";
		echo '"' . $row["moeda"] . '", "' . ($row['ciclo'] + 1) . '")';
		echo "' data-dismiss='modal'>SIM</button> <button data-dismiss='modal' class='btn btn-default'>NÃO</button>";
	}
	
}


?>
<script>
function iniciaCiclo(moed, cicl){
	
	var mm = {moeda:moed,ciclo:cicl}
	var dados = mm;
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/iniciar_ciclo.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			$('#tabela').html(response);
		}
	});
}
</script>