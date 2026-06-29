<?php

include('../conn_db.php');
include('crypt.php');

$saq = $_POST;
if($saq['tx'] == ''){
	exit(1);
}

$query = "SELECT * FROM saques WHERE `id` = '" . $saq['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

$query = "UPDATE saques SET status = 1 , txid='" . $saq['tx'] . "' WHERE id=" . $saq['id'];
$result = mysqli_query($conect, $query);

$query = "SELECT * FROM `" . $row['moeda'] . "` WHERE nome = '" . $row['investidor'] . "'";
$result = mysqli_query($conect, $query);
$row2 = mysqli_fetch_assoc($result);


if($row2 == FALSE){
	$query = "INSERT INTO `" . $row['moeda'] . "` (nome, moedas) VALUES ('" . $row['investidor'] . "','" . $row['qnt'] . "')";
	$result = mysqli_query($conect, $query);
}else{
	
	$moedas = $row2['moedas'] - $row['qnt'];
	$query = "UPDATE `" . $row['moeda'] . "` SET moedas = '" . $moedas . "' WHERE nome ='" . $row['investidor'] . "'";
	$result = mysqli_query($conect, $query);
}

?>
<table border='1' align='center'>
					<tr><th>Investidor</th><th>CoInvestidor</th><th>Moeda</th><th>Quantidade</th><th>Data</th><th>Ação</th></tr>
						<?php 

						$query = "SELECT * FROM saques WHERE status ='0'";

						$result = mysqli_query($conect, $query); //resultado do select
						while ($row = mysqli_fetch_array($result)) {
							$cds = decrypta($row['segc']);
							echo "<tr><td>" . $row['investidor'] . "</td><td>" . $row['coinvestidor'] . "
							</td><td>" . $row['moeda'] . "
							</td><td>" . $row['qnt'] . "</td>
							<td>" . date("d/m/Y - H:i:s", strtotime($row["data"])) . "</td><td align='center'>";
							echo '<button type="button" data-toggle="modal" data-target="#myModal" onClick="detalhesSaque(' . $row["id"] . ')">Detalhes</button></td></tr>';
						}
						?>
				</table>