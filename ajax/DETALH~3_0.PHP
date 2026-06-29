<?php

include('../conn_db.php');
include('crypt.php');
$dep = $_POST;

$query = "SELECT * FROM saques WHERE `id` = '" . $dep['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);
$cds = decrypta($row['segc']);
echo "<p>Investidor: <b>" . $row['investidor'] . "</b></br>";

echo "Moeda: " . $row['moeda'] . "<br>
		Quantia: " . $row['qnt'] . "<br>
		Código de Segurança: " . $cds . "<br>
		Txid: <input class='input_depsaq' type='text' name='txid' id='txid' maxlength='50' value='" . $row['txid'] . "' onkeyup='validaCampo()'><br>
		Data: " . $row['data'] . "<br>
		Wallet: " . $row['carteira'] . "</p>";
echo "<p>Caso haja recusa no saque, explique na caixa abaixo<br>";
echo '<textarea rows="10" cols="40" maxlength="500" id="obs" class="obs_txt">' . $row["obs"] . '</textarea></p>';
?>
<div id="alert" class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
		
</div>
<?php
echo "</br><button id='confirmar' onClick='confirmaSaque(" . $row['id'] . ")' class='btn btn-default'>Confirmar</button> <button onClick='recusaSaque(" . $row['id'] . ")' data-dismiss='modal' class='btn btn-default'>Recusar</button>";

?>
<script>
$('#alert').hide();

function validaCampo(){
	if($('#txid').val() == ''){
		$('#btn').removeAttr("data-dismiss");
	}else{
		$('#btn').attr("data-dismiss","modal");  
	}
	
}
function confirmaSaque(x){
	var txid = $('#txid').val();
	if(txid == ''){
		$('#alert').show();
		$('#alert').html('<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span><strong>O campo TXID é obrigatório.</p>');
	}else{
		var mm = {id:x,tx:txid};
		var dados = mm;
		$.ajax({
			type: 'POST',
			//dataType: 'json',
			url: 'ajax/proadmconfirma_saq.php',
			async: true,
			data: dados,
			success: function(response) {

				$('#tabela').html(response);

				
			}
		});
	}
		

}
</script>