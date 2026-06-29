<?php
include('../conn_db.php');

$query = "SELECT * FROM car_dep";
$result = mysqli_query($conect, $query);

$select_moeda = '<select id="select_moeda"">
				<option id="0" value="selecione">Escolha a moeda</option>';


while ($row = mysqli_fetch_array($result)) {
	$select_moeda .= '<option id="' . $row['id'] . '" value="' . $row['moeda'] . '">' . $row['nome'] . '</option>';
}

$select_moeda .= '</select>';

echo 'Moeda: ' . $select_moeda . '</br>';

echo "<p id='infoCiclo'>Moeda</p>";

?>
<script>
$('#infoCiclo').hide();
$('#select_moeda').change(function(){
	if(jQuery(this).val() != "selecione"){
		
		$('#infoCiclo').show();
		var mod = jQuery(this).val();
		var mm = {moeda:mod};
		var dados = mm;
		$.ajax({
			type: 'POST',
			//dataType: 'json',
			url: 'ajax/ver_ciclo.php',
			async: true,
			data: dados,
			success: function(response) {
				//location.reload();
				$('#infoCiclo').html(response);
			}
		});
	}else{
		$('#infoCiclo').hide();
	}
});
</script>