<?php
include("../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
include ("../conn_db.php");
$bloco = $_POST;
if($bloco['tipo'] == 'mn'){
	
	$queryh = "SELECT * FROM mn WHERE moeda_id = '" . $bloco['moeda'] . "'";
    $result = mysqli_query($conect, $queryh);
	if(mysqli_num_rows($result) > 0){
		echo "<div class='form-group'><label for='sel_mn'>Masternode</label><select class='form-control' id='sel_mn'><option id='a' value='a'>Selecione</option>";
		while($row = mysqli_fetch_array($result)){
			echo "<option id='" . $row['id'] . "' value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
		}
		echo "</select></div>";
	}else{
		
	}
	
}else{
	
}
//$queryh = "SELECT * FROM `" . $moeda . "` WHERE nome = '" . $_SESSION['usuarioNome'] . "'";
//$result1 = mysqli_query($conect, $queryh);
//$row2 = mysqli_fetch_assoc($result1);
//echo $row2;
//echo "<script>var moedas = " . $row2['moedas'] . ";</script>";

?>