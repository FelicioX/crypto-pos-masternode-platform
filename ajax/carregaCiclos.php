<?php
include('../conn_db.php');

$moeda = $_POST;

$query = "SELECT * FROM ciclos WHERE moeda = '" . $moeda['moeda'] . "'";
$result = mysqli_query($conect, $query);
echo '<select id="ciclos" style="width: 80px; margin-bottom: 15px;"><option id="a" value="a">Ciclo</option>';
while($row = mysqli_fetch_array($result)){
	echo '<option id="' . $row['id'] . '" value="' . $row['id'] . '">' . $row['ciclo'] . '</option>';
}
echo "</select>";
?>
<script>
$('#ciclos').change(function(){
					
					if(jQuery(this).val() != "a"){
						
						var idd = jQuery(this).val();
						var mm = {id:idd};
						var dados = mm;
						$.ajax({
							type: 'POST',
							//dataType: 'json',
							url: 'ajax/carregaCiclo.php',
							async: true,
							data: dados,
							success: function(response) {
								//location.reload();
								
								$('#tabela-ciclo').html(response);
							}
						});
					}else{
						
					}
				});
				</script>