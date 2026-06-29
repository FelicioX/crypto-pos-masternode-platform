<?php
include("../conn_db.php");

$bloco = $_POST;

echo "<div class='form-group'><label for='sel_cb'>Moeda</label>
	<select class='form-control' id='sel_cb' disabled>";

$query = "SELECT * FROM car_dep";
$result = mysqli_query($conect, $query);
while ($row = mysqli_fetch_array($result)) {
	if($row['moeda'] != $bloco['moed']){
		echo '<option id="' . $row['id'] . '" value="' . $row['moeda'] . '">' . $row['nome'] . '</option>';
	}else{
		echo '<option id="' . $row['id'] . '" value="' . $row['moeda'] . '" selected>' . $row['nome'] . '</option>';
	}
}
echo "</select></div>";
echo "<div class='form-label-group'><input class='form-control' type='text' id='ciclo_cb' maxlength='10' value='" . $bloco['cicl'] . "'><label for='ciclo_cb'>Ciclo</label></div></br>";
echo "<div class='form-label-group'><input class='form-control' type='text' id='qnt_cb' maxlength='50' onkeypress='return SomenteNumero(event)'><label for='qnt_cb'>Quantidade</label></div></br>
	<div class='form-label-group'><input class='form-control' type='text' id='txid_cb' maxlength='50'><label for='txid_cb'>TXID</label></div></br>";
echo "<div class='form-group'><label for='sel_tipo'>Tipo</label>
	<select class='form-control' id='sel_tipo'>
	<option id='stakeid' value='stake'>Stake</option>
	<option id='mnid' value='mn'>Masternode</option>
	</select></div><div id='masternodes'></div></br>";
echo "<p><button class='btn btn-default' onClick='cadastrarBloco(" . $bloco['idd'] . ")'>Salvar</button> <button data-dismiss='modal' class='btn btn-default'>Cancelar</button></p>";

?>
<script>
$('#sel_tipo').change(function(){
	if(jQuery(this).val() != "a"){
		
		var mod = jQuery(this).val();
		var coin = $('#sel_cb').find('option:selected').attr('id');
		var mm = {tipo:mod,moeda:coin};
		var dados = mm;
		$.ajax({
			type: 'POST',
			//dataType: 'json',
			url: 'ajax/carregaBMn.php',
			async: true,
			data: dados,
			success: function(response) {
				//location.reload();
				$('#masternodes').html(response);
			}
		});
	}else{
		
	}
});
function cadastrarBloco(idd){
	if($('#sel_tipo').val() == 'stake'){
		var dados = {tipo:$('#sel_tipo').val(),moeda:$('#sel_cb').val(),ciclo:$('#ciclo_cb').val(),qnt:$('#qnt_cb').val(),txid:$('#txid_cb').val(),id:idd}
	}else{
		var dados = {mn:$('#sel_mn').val(),tipo:$('#sel_tipo').val(),moeda:$('#sel_cb').val(),ciclo:$('#ciclo_cb').val(),qnt:$('#qnt_cb').val(),txid:$('#txid_cb').val(),id:idd}
	}
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/cadastrarBloco.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			$('#mbody').html(response);
		}
	});
}
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
	
    if((tecla>47 && tecla<58 || tecla==46)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>

