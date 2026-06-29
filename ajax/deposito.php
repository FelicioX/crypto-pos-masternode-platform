<?php
include("../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
include ("../conn_db.php");

$moeda = $_POST['mod'];
$select = "SELECT * FROM car_dep WHERE `moeda` = '$moeda'";
$result = mysqli_query($conect, $select); //resultado do select

$row = mysqli_fetch_assoc($result);
?>
<script src="js/jquery-3.3.1.min.js" type="text/javascript" ></script>
<script type="text/javascript">
$("#linha-co").hide();
function escondeMostra(x){
if(x == 1){
	$("#linha-co").show();
}
else{
	$("#linha-co").hide();
	}
}
function verifica() {
	var dados = $("#dep").serialize();
	$.ajax({
		type: "POST",
		dataType: "json",
		url: "checa_form.php?tipo=deposito",
		async: true,
		data: dados,
		success: function(response) {
			
		$('#botao').html(response.input);
			if(response.qnt == false){
				$('#qnt').css('border-color', '#FF0000');
				$('#qnt').css('background', '#FFeeee');
			}else{
				$('#qnt').css('border-color', '#00FF00');
				$('#qnt').css('background', '#eeFFee');
			}
			if(response.txid == false){
				$('#txid').css('border-color', '#FF0000');
				$('#txid').css('background', '#FFeeee');
			}else{
				$('#txid').css('border-color', '#00FF00');
				$('#txid').css('background', '#eeFFee');
			}
		}
	});
}
</script>
<p style='text-align: center;' class='end_carteira'><b><?php echo $row['endereco']; ?></b></p>

	<form id='dep' method="post" action="confirma_dep.php">
	<?php echo "<input type='hidden' name='moeda' id='moeda' value='" . $moeda = $_POST['mod'] . "'>"; ?>		
		<div class="form-label-group">
			<input class="form-control" aria-describedby="qtmoedasHelp" type="text" name="qnt" id="qnt" maxlength="50" onkeyup="verifica()"/>
			<label for="qtmoedasHelp">Amount*</label>
			<small id="qtmoedasHelp" class="form-text text-muted">Do not use commas, always use point.</small>
		</div><br>
		<div class="form-label-group">
			<input class="form-control" aria-describedby="ctSaque" type="text" name="carteira" id="carteira" maxlength="50" onkeyup="verifica()"/>
			<label for="ctSaque">Your wallet for withdrawal</label>
			<small id="ctSaque" class="form-text text-muted">This information can be changed later.</small>
		</div><br>
		<div class="form-label-group">
			<input class="form-control" aria-describedby="txidL" type="text" name="txid" id="txid" maxlength="70" onkeyup="verifica()"/>
			<label for="txid">TXID*</label>
			<small id="txidL" class="form-text text-muted">Fill in this field carefully, if there is an error in this field, your deposit will be considered as a donation to the pool.</small>
		</div>
		<div>
			<p id="botao"><input class="btn btn-primary" type="submit" id="confima" value="* campos vazios" disabled /></p>
		</div>
	</form>
<?php
		
		if(mysqli_num_rows($result) == 0){
			echo "<script>$('#coinv').hide();</script>";
		}
		
		?>