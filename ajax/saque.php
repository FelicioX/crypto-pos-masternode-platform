<?php
include("../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
include ("../conn_db.php");
$moeda = $_POST['mod'];
$queryh = "SELECT * FROM `" . $moeda . "` WHERE nome = '" . $_SESSION['usuarioNome'] . "'";
$result1 = mysqli_query($conect, $queryh);
$row2 = mysqli_fetch_assoc($result1);
echo $row2;
echo "<script>var moedas = " . $row2['moedas'] . ";</script>";
?>

<script src="js/jquery-3.3.1.min.js" type="text/javascript" ></script>
<script type="text/javascript">
$("#linha-co").hide();
$('#qntinfo').hide();
function escondeMostra(x){
	
	if(x == 1){
		$("#linha-co").show();
	}
	else{
		$("#linha-co").hide();
		}
}
function verifica() {
	var dados = $('#dep').serialize();
	<?php 
	if(isset($row2['moedas'])){
		echo "var moedas = " . $row2['moedas'] . ";"; 
	}else{
		echo "var moedas = 0;"; 
	}
	
	?>
	if($('#qnt').val() == ''){
		$('#qnt').css('border', '1px solid #FF0000');
		$('#qnt').css('background', '#FFeeee');
		return;
	}else{
		$('#qnt').css('border', '1px solid #00FF00');
		$('#qnt').css('background', '#eeFFee');

		if($('#qnt').val() > moedas){
			$('#qnt').css('border', '1px solid #FF0000');
			$('#qnt').css('background', '#FFeeee');
			$('#qntinfo').html('Você não possue essa quantidade de moedas.');
			$('#qntinfo').css('color', '#FF0000');
			$('#qntinfo').show();
			$('#confirma').attr("disabled");
			return;
		}else{
			$('#confirma').removeAttr("disabled");
			$('#qntinfo').hide();
		}
		
	}
	if($('#carteira').val() == ''){
		$('#carteira').css('border', '1px solid #FF0000');
		$('#carteira').css('background', '#FFeeee');
		return;
	}else{
		$('#carteira').css('border', '1px solid #00FF00');
		$('#carteira').css('background', '#eeFFee');
	}
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'checa_form.php?tipo=saque',
		async: true,
		data: dados,
		success: function(response) {
			
			var data = JSON.parse(response);
			$('#botao').html(data.input);
			
		}
	});
}
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
	
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>

<?php

	

$select = "SELECT * FROM car_dep WHERE `moeda` = '$moeda'";
$result = mysqli_query($conect, $select); //resultado do select

$row = mysqli_fetch_assoc($result);


?>
<p>Balanço: <b style='color: #229933;' onclick='allBalance("<?php echo $row2['moedas']; ?>")'><?php echo number_format($row2['moedas'], 8); ?></b> </p>
<table class='tab-saq' width="100%" align='center'>
<tr><td colspan='2'>
	<form id='dep' method="post" action="confirma_saque.php">
		<div class="form-label-group">
			<input class="form-control" aria-describedby="qtmoedasHelp" type="text" name="qnt" id="qnt" maxlength="50" onkeyup="verifica()"/>
			<label for="qtmoedasHelp">Amount*</label>
			<small id="qtmoedasHelp" class="form-text text-muted">Do not use commas, always use point.</small>
			<div id='qntinfo'></div>
		</div><br>
		<div class="form-label-group">
			<input class="form-control" aria-describedby="wallet" type="text" name="carteira" id="carteira" maxlength="50" onkeyup="verifica()"/>
			<label for="wallet">Your wallet*</label>
			<small id="qtmoedasHelp" class="form-text text-muted">EcoStakePool is not responsible for the loss of the coins if the wallet inserted is invalid.</small>
		</div><br>
		<div class="form-label-group">
		</div><br>
		<div class="form-label-group">
			<p id="botao"><input class="btn btn-primary" type="submit" id="confima" value="* campos vazios" disabled /></p>
		</div><br>
		<input type="text" name="moeda" id="moeda" maxlength="50" hidden value='<?php echo $moeda; ?>'/>
	</form>
</td></tr></table>
<script>
function allBalance(x){
	$('#qnt').val(x);
	verifica();
}
</script>