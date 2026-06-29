<?php
include("../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
include('../conn_db.php');

$dep = $_POST;

$query = "DELETE FROM depositos WHERE id=" . $dep['id'];
$result = mysqli_query($conect, $query);


?>
<h3>Histórico de Depósitos</h3>
			<table align="center" >
				<tr align="center">
					<th width='100px'>Moeda</th><th>Quantidade</th><th>Data</th><th>Status</th>
				</tr>
				<?php
					$query = "SELECT * FROM depositos WHERE `investidor` = '" . $_SESSION['usuarioLogin'] . "' ORDER BY `data` DESC LIMIT 5";
					//echo $query;
					$result = mysqli_query($conect, $query); //resultado do select
					//print_r($result);
					if($result != FALSE){
						while ($row = mysqli_fetch_array($result)) {
							if($row["status"] == 0){
								echo '<tr align="center">
								<td style="width: 100px;">' . $row["moeda"] . '</td><td>' . $row["qnt"] . '</td><td>' . date("d/m/Y - H:i:s", strtotime($row["data"])) . '</td><td><button data-toggle="modal" data-target="#myModal" onclick="abrirDetalhes(' . $row['id'] . ')">Processando</button></td>
								</tr>';
							}elseif($row["status"] == 1){
								echo '<tr align="center">
								<td>' . $row["moeda"] . '</td><td>' . $row["qnt"] . '</td><td>' . date("d/m/Y - H:i:s", strtotime($row["data"])) . '</td><td><button data-toggle="modal" data-target="#myModal" onclick="abrirDetalhes(' . $row['id'] . ')">Concluído</button></td>
								</tr>';
							}else{
								echo '<tr align="center">
								<td>' . $row["moeda"] . '</td><td>' . $row["qnt"] . '</td><td>' . date("d/m/Y - H:i:s", strtotime($row["data"])) . '</td><td><button data-toggle="modal" data-target="#myModal" onclick="abrirDetalhes(' . $row['id'] . ')">Recusado</button></td>
								</tr>';
							}
						}
					}
					
					
				?>
				
			</table>