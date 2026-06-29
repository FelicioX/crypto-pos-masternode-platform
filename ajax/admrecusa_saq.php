<?php
include('../conn_db.php');

$saq = $_POST;

$query = "SELECT * FROM saques WHERE `id` = '" . $saq['id'] . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

$query = "UPDATE saques SET status = 2 , obs='" . $saq['ob'] . "' WHERE id=" . $saq['id'];
$result = mysqli_query($conect, $query);

?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead><tr><th>Investidor</th><th>CoInvestidor</th><th>Moeda</th><th>Quantidade</th><th>Data</th><th>Ação</th></tr></thead>
							<?php 

								$query = "SELECT * FROM saques WHERE status ='0'";

								$result = mysqli_query($conect, $query); //resultado do select
									while ($row = mysqli_fetch_array($result)) {
										echo "<tr><td>" . $row['investidor'] . "</td><td>" . $row['coinvestidor'] . "</td><td>" . $row['moeda'] . "</td><td>" . $row['qnt'] . "</td>
										<td>" . date('d/m/Y - H:i:s', strtotime($row['data'])) . "</td><td align='center'>
										<button data-toggle='modal' data-target='#myModal' onClick='detalhesDeposito(" . $row['id'] . ")'>Detalhes</button></td></tr>";
									}
							?>
					</table>