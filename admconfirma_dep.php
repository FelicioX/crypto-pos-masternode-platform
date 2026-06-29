<?php

include('conn_db.php');

$dep = $_POST;

$query = "SELECT * FROM depositos WHERE `id` = '" . $dep['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

$query = "UPDATE depositos SET status = 1 WHERE id=" . $dep['id'];
$result = mysqli_query($conect, $query);

$query = "SELECT * FROM `" . $row['moeda'] . "` WHERE nome = '" . $row['investidor'] . "'";
$result = mysqli_query($conect, $query);



if(mysqli_num_rows($result) == 0){
	$query = "INSERT INTO `" . $row['moeda'] . "` (nome, coinvestidor, moedas) VALUES ('" . $row['investidor'] . "', '" . $row['coinvestidor'] . "','" . $row['qnt'] . "')";
	$result = mysqli_query($conect, $query);
}else{
	$row2 = mysqli_fetch_assoc($result);
	$moedas = $row2['moedas'] + $row['qnt'];
	$query = "UPDATE `" . $row['moeda'] . "` SET moedas = '" . $moedas . "' WHERE nome ='" . $row['investidor'] . "' AND coinvestidor = '" . $row['coinvestidor'] . "'";
	$result = mysqli_query($conect, $query);
}

?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead><tr><th>Investidor</th><th>Moeda</th><th>Quantidade</th><th>Data</th><th>Ação</th></tr></thead>
							<?php 

								$query = "SELECT * FROM depositos WHERE status ='0'";

								$result = mysqli_query($conect, $query); //resultado do select
									while ($row = mysqli_fetch_array($result)) {
										echo "<tr><td>" . $row['investidor'] . "</td><td>" . $row['moeda'] . "</td><td>" . $row['qnt'] . "</td>
										<td>" . date('d/m/Y - H:i:s', strtotime($row['data'])) . "</td><td align='center'>
										<button data-toggle='modal' data-target='#myModal' onClick='detalhesDeposito(" . $row['id'] . ")'>Detalhes</button></td></tr>";
									}
							?>
					</table>
