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
echo "Discord: " . $row['discord'] . "<br>
		Moeda: " . $row['moeda'] . "<br>
		Quantia: " . $row['qnt'] . "<br>
		Txid: " . $row['txid'] . "<br>
		Data: " . $row['data'] . "</p>";
echo "<p>Caso haja recusa no depósito, explique na caixa abaixo<br>";
echo '<textarea rows="10" cols="40" maxlength="500" id="obs" class="obs_txt">' . $row["obs"] . '</textarea></p>';
echo "<button id='confirmar' onClick='confirmadeposito(" . $row['id'] . ")' data-dismiss='modal' class='btn btn-default'>Confirmar</button> <button id='confirmar' onClick='recusadeposito(" . $row['id'] . ")' data-dismiss='modal' class='btn btn-default'>Recusar</button>";

?>