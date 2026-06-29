<?php

include('../conn_db.php');

$dep = $_POST;

$query = "SELECT * FROM saques WHERE `id` = '" . $dep['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

echo "<p>Investidor: <b>" . $row['investidor'] . "</b></br>";
if($row['coinvestidor'] == ''){
	
}else{
	echo "Co-Investidor: <b>" . $row['coinvestidor'] . "</b></br>";
}
echo 'Moeda: ' . $row["moeda"] . '<br>
		Data: ' . $row["data"] . '<br>
		Quantia: <input class="input_depsaq" type="text" name="qnt" id="qnt" maxlength="50" value="' . $row["qnt"] . '"><br>
		Código de Segurança: <input class="input_depsaq" type="text" name="cds" id="cds" maxlength="6">
		</p>';
echo 'Observações: ' . $row['obs'] . '</p>';
echo "<button onclick='salvarSaq(" . $row['id'] . ")' class='btn btn-default'>Salvar</button> <button onclick='deletarSaq(" . $row['id'] . ")' data-dismiss='modal' class='btn btn-default'>Deletar</button>";

?>
<script>
function salvarSaq(x){
	var qnt = $('#qnt').val();
	var cs = $('#cds').val();
	var mm = {id:x,qn:qnt,cds:cs};
	var dados = mm;
	$.ajax({
		
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/salvar_saq.php',
		async: true,
		data: dados,
		success: function(response) {
			
			var data = JSON.parse(response);
			$('#mbody').html(data.detalhes);
			$('#tabela-saques').html(data.tabela);
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
			$('#hist_dep').html(response);
		}
	});
}
</script>