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
echo 'Discord: ' . $row['discord'] . '<br>
		Moeda: ' . $row["moeda"] . '<br>
		Data: ' . $row["data"] . '<br>
		Quantia: <input class="input_depsaq" type="text" name="qnt" id="qnt" maxlength="50" value="' . $row["qnt"] . '"><br>
		Txid: <input class="input_depsaq" type="text" name="txid" id="txid" maxlength="50" value="' . $row["txid"] . '">
		</p>';
echo 'Observações: ' . $row['obs'] . '</p>';
echo "<button onclick='salvarDep(" . $row['id'] . ")' class='btn btn-default'>Salvar</button> <button onclick='deletarDep(" . $row['id'] . ")' data-dismiss='modal' class='btn btn-default'>Deletar</button>";

?>
<script>
function salvarDep(x){
	var qnt = $('#qnt').val();
	var txid = $('#txid').val();
	var mm = {id:x,qn:qnt,tx:txid};
	var dados = mm;
	$.ajax({
		
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/salvar_dep.php',
		async: true,
		data: dados,
		success: function(response) {
			var data = JSON.parse(response);
			$('#mbody').html(data.detalhes);
			$('#tabela-depositos').html(data.tabela)
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