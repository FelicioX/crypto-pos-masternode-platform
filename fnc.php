<?php
include('conn_db.php');
$_CON = $conect;

function tabelaHistRend(){
	global $_CON;

	$query = "SELECT * FROM block_stakes ORDER BY `data` DESC";
	$result = mysqli_query($_CON, $query); //resultado do select
	
	$table = "<table class='table table-bordered' id='dataTable'><thead><tr style='text-align:center;'><th></th><th>Tycker</th><th>Type</th><th>Coins</th><th>Date</th></tr></thead><tbody>";
	if(mysqli_num_rows($result) > 0){
		
		while($row = mysqli_fetch_array($result)){
			
			foreach(json_decode($row['participantes']) as $key => $u){
				$participantes[$key] = $u->moedas;
			}
			if(isset($participantes[$_SESSION['usuarioNome']])){
				$table .= "<tr><td><img width='24' height='24' src='images/coinlogos/" . $row['moeda'] . ".png' /></td><td>" . $row['moeda'] . "</td><td>" . $row['tipo'] . "</td><td>" . number_format($participantes[$_SESSION['usuarioNome']], 8) . "</td><td>" . $row['data'] . "</td></tr>";
			}
			unset($participantes);
		}
	}
	$table .= "</tbody></table>";
	return $table;
}
function listaMnDashboard($user){
	global $_CON;

	$query = "SELECT * FROM mn";
	$result = mysqli_query($_CON, $query); //resultado do select
	
	$table = "<table class='table table-bordered' id='dataTable'><thead><tr style='text-align:center;'><th></th><th>Coin</th><th>MN</th><th>Balance</th><th>Deposit</th><th>Withdraw</th></tr></thead><tbody>";
	if(mysqli_num_rows($result) > 0){
		
		while($row = mysqli_fetch_array($result)){
			$query = "SELECT * FROM car_dep WHERE id = '" . $row['moeda_id'] . "'";
			$result2 = mysqli_query($_CON, $query); //resultado do select
			$moeda = mysqli_fetch_assoc($result2);
			
			$query = "SELECT * FROM cotas_mn WHERE mn_id = '" . $row['id'] . "' AND user_id = '" . $user . "'";
			$result3 = mysqli_query($_CON, $query); //resultado do select
			$cota = 0;
			if(mysqli_num_rows($result3) > 0){
				while($row2 = mysqli_fetch_array($result3)){
					$cota += $row2['qnt'];
				}
			}
			
			$table .= "<tr style='text-align:center;'><td><img width='24' height='24' src='images/coinlogos/" . $row['moeda'] . ".png' /></td><td>" . $moeda['nome'] . "</td><td>" . $row['nome'] . "</td><td>" . round($cota, 2) . "</td><td>";
			/*if($row['status'] != 3){
				$table .= "<button class='deposit' id='depositar' data-toggle='modal' data-target='#myModal' OnClick='abrirModal";
				$table .= '("dep","' . $row['moeda'] . '")';
				$table .= "'>Deposit</button>";
			}*/
			$table .= "</td><td>";
			$table .= "<button id='retirar' data-toggle='modal' data-target='#myModal' class='withdraw' OnClick='saqueMn";
			$table .= '("' . $row['id'] . '")';
			$table .= "'>Withdraw</button>";
			$table .= "</td></tr>";
		}
		
	}
	$table .= "</tbody></table>";
	return $table;
	
}
function listarCotas($mn){
	global $_CON;
	
	$tabela = '<table class="table table-bordered" width="100%" cellspacing="0">
					<thead><tr><th>Usuário</th><th>Moedas</th><th>Ação</th><tr></thead>
					<tbody>';
	$query = "SELECT * FROM cotas_mn WHERE mn_id = '" . $mn . "'";
	$result = mysqli_query($_CON, $query); //resultado do select
						
	$cota = 0;
	if(mysqli_num_rows($result) > 0){
		
		while($row = mysqli_fetch_array($result)){
			$query = "SELECT *FROM usuarios WHERE id = '" . $row['user_id'] . "'";
			$result2 = mysqli_query($_CON, $query);
			$user = mysqli_fetch_assoc($result2);
			$tabela .= "<tr><td>" . $user['nome'] . "</td><td>" . $row['qnt'] . "</td><td></td></tr>";
			$cota += $row['qnt'];
		}
		
	}else{
		$tabela .= "<tr><td td colspan='3'>Sem cotas</td></tr>";
	}
	$tabela .= '</tbody></table>';
	
	$query = "SELECT * FROM mn WHERE id = '" . $mn . "'";
	$result = mysqli_query($_CON, $query); //resultado do select
	$row = mysqli_fetch_assoc($result);
	
	$retorno['tabela'] = $tabela;
	$retorno['cota'] = $cota . " / " . $row['cota_total'];
	
	return $retorno;
}
function listarMasternodes(){
	global $_CON;
	
	$query = "SELECT * FROM mn";
	$result = mysqli_query($_CON, $query); //resultado do select
	
	$tabela = '<table class="table table-bordered" id="dataTable"><thead><tr><th></th><th>Moeda</th><th>Nome</th><th>Collateral</th><th>Status</th></tr></thead><tbody>';
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			$query = "SELECT * FROM cotas_mn WHERE mn_id = " . $row['id'];
			$result2 = mysqli_query($_CON, $query); //resultado do select
			$cota = 0;
			if(mysqli_num_rows($result2) > 0){
				while($row2 = mysqli_fetch_array($result2)){
					$cota += $row2['qnt'];
				}
			}
			$tabela .= "<tr><td><img width='24' height='24' src='images/coinlogos/" . $row['moeda'] . ".png' /></td><td>" . $row['moeda'] . "</td><td>" . $row['nome'] . "</td><td>" . $cota . "/" . $row['cota_total'] . "</td><td><a href='adm_mn.php?mn=" . $row['id'] . "' class='btn btn-primary'>Detalhes</a></td></tr>";
		}
	}
	$tabela .= '</tbody></table><script src="js/demo/datatables-demo.js"></script>';
	
	return $tabela;
}

function listaMMn(){
	global $_CON;
	$query = "SELECT * FROM car_dep WHERE mn = 1";
	$result = mysqli_query($_CON, $query); //resultado do select
	$select = '<select class="form-control" id="moeda" value="moeda"><option id="a" value="a">Selecione a Moeda</option>';
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			$select .= '<option id="' . $row['id'] . '" value="' . $row['id'] . '">' . $row['nome'] . '</option>';
		}
	}
	$select .= '</select>';
	
	return $select;
	
}
function tabelaMyTips(){
	global $_CON;
	$tabela = '<table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0"><thead><tr><th></th><th>Coin</th><th>To</th><th>Amount</th><th>Date</th></tr></thead><tbody>';
	$query = "SELECT * FROM tips WHERE de = '" . $_SESSION['usuarioNome'] . "' ORDER BY `date` DESC";

	$result = mysqli_query($_CON, $query); //resultado do select
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			
			$tabela .= "<tr><td><img width='24' height='24' src='images/coinlogos/" . $row['moeda'] . ".png' /></td><td>" . $row['moeda'] . "</td><td>" . $row['para'] . "</td><td>" . $row['qnt'] . "</td><td>" . $row['date'] . "</td></tr>";
		}
	}else{
		$tabela .= "<tr align='center'><td colspan='5'>No tip</td></tr>";
	}
	
$tabela .= '</tbody></table><script src="js/demo/datatables-demo.js"></script>';
return $tabela;
}
function tabelaReceiveTips(){
	global $_CON;
	$tabela = '<table class="table table-bordered display" id="dataTable2" cellspacing="0"><thead><tr><th></th><th>Coin</th><th>From</th><th>Amount</th><th>Date</th></tr></thead><tbody>';
	$query = "SELECT * FROM tips WHERE para = '" . $_SESSION['usuarioNome'] . "' ORDER BY `date` DESC";

	$result = mysqli_query($_CON, $query); //resultado do select
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			
			$tabela .= "<tr><td><img width='24' height='24' src='images/coinlogos/" . $row['moeda'] . ".png' /></td><td>" . $row['moeda'] . "</td><td>" . $row['de'] . "</td><td>" . number_format($row['qnt'], 2) . "</td><td>" . $row['date'] . "</td></tr>";
		}
	}else{
		$tabela .= "<tr align='center'><td colspan='5'>No tip</td></tr>";
	}
	
$tabela .= '</tbody></table><script src="js/demo/datatables-demo2.js"></script>';
return $tabela;
}
function listaUsuarios(){
	global $_CON;
	$select = '<select class="form-control" id="users" value="users">';
	$query = "SELECT * FROM usuarios ORDER BY nome ASC";
	$result = mysqli_query($_CON, $query); //resultado do select
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			$select .= '<option id="' . $row['id'] . '" value="' . $row['id'] . '">' . $row['nome'] . '</option>';
		}
	}
	$select .= '</select>';
	
	return $select;
}
function listaMoedas(){
	global $_CON;
	$select = '<select class="form-control" id="coins" value="coins">';
	$query = "SELECT * FROM car_dep ORDER BY nome ASC";
	$result = mysqli_query($_CON, $query); //resultado do select
	$select .= '<option id="a" value="a">Coins</option>';
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			$select .= '<option id="' . $row['id'] . '" value="' . $row['id'] . '">' . $row['nome'] . '</option>';
		}
	}
	$select .= '</select>';
	$select .= "<script></script>";
	return $select;
}
function tabelaCiclos(){
	global $_CON;
	$tabela = '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><thead><tr><th style="width: 25%;">Moeda</th><th style="width: 25%;">Ciclo</th><th style="width: 25%;">Inicio</th><th style="width: 25%;">Ação</th></tr></thead><tbody>';
	$query = "SELECT * FROM ciclos WHERE fim = '0000-00-00 00:00:00' ORDER BY `id` DESC";

	$result = mysqli_query($_CON, $query); //resultado do select
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			
			$tabela .= "<tr align='center'><td>" . $row['moeda'] . "</td><td>" . $row['ciclo'] . "</td><td>" . $row['inicio'] . "</td><td class='detalhes'><button data-toggle='modal' data-target='#myModal' class='btn btn-default' onClick='abrirDetalhesCiclo(";
			$tabela .= '"' . $row['ciclo'] . '", "' . $row['moeda'] . '", "' . $row['id'] . '")';
			$tabela .= "'>Detalhes</button> <button class='btn btn-default' onClick='finalizarCiclo(" . $row['id'] . ", ";
			$tabela .= '"' . $row['ciclo'] . '", "' . $row['moeda'] . '"';
			$tabela .= ")'>Finalizar</button></td></tr>";
		}
	}else{
		$tabela .= "<tr align='center'><td colspan='4'>Nenhum ciclo em andamento</td></tr>";
	}
	
$tabela .= '</tbody></table>';
return $tabela;
	
}
function tabelaCicloDetalhes($ciclo){
	global $_CON;
	
	$query = "SELECT * FROM ciclos WHERE id = '" . $ciclo . "'";
	$result = mysqli_query($_CON, $query);
	$row = mysqli_fetch_assoc($result);

	$query = "SELECT * FROM block_stakes WHERE moeda = '" . $row['moeda'] . "' AND ciclo = " . $row['ciclo'] . " ORDER BY `data` DESC";
	$result = mysqli_query($_CON, $query);


	$tabela = "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'><thead><tr><th>DATA</th><th>MOEDAS</th><th>FEE</th><th>TXID</th></tr></thead><tbody>";

	if($result == false || mysqli_num_rows($result) == 0){
		$tabela .= "<tr align='center'><td colspan='4'>Nenhum bloco cadastrado para esse ciclo</td></tr>";
	}else{
		while ($row2 = mysqli_fetch_array($result)) {
			$tabela .= "<tr align='center'><td>" . date("d/m/Y - H:i:s", strtotime($row2["data"])) . "</td><td>" . number_format($row2['qnt'], 8) . "</td><td>" . $row2['fee'] . "</td><td>" . $row2['txid'] . "</td></tr>";
		}
	}
	$tabela .= "</table>";
	$tabela .= "<p><button class='btn btn-default' onClick='cadastroBloco(";
	$tabela .= '"' . $row["moeda"] . '", "' . $row["ciclo"] . '", "' . $row['id'] . '")';
	$tabela .= "'>Cadastrar Bloco</button><script>
function cadastroBloco(moeda, ciclo, id){
	
	var dados = {moed:moeda,cicl:ciclo,idd:id}
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/cadastroBloco.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			$('#mbody').html(response);
		}
	});
}
</script>";
return $tabela;
}
function tabelaMoedas(){
	global $_CON;
	$tabela = '<table class="table table-bordered no-footer" id="dataTable" width="100%" cellspacing="0"><thead><tr><th>Logo</th><th>Ticker</th><th>Nome</th><th>Carteira</th><th>Balance</th><th>Status</th><th>Ação</th></tr></thead><tbody>';
	$query = "SELECT * FROM car_dep";
	$result = mysqli_query($_CON, $query); //resultado do select
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$query2 = "SELECT * FROM `" . $row['moeda'] . "`";
			$result2 = mysqli_query($_CON, $query2);
			$balance = 0;
			if($result2 != null){
				while($row2 = mysqli_fetch_array($result2)){
					$balance += $row2['moedas'];
				}
			}
			$tabela .= "<tr><td><img src=images/coinlogos/" . $row['moeda'] . ".png width='48' height='48' /></td><td>" . $row['moeda'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['endereco'] . "</td><td>" . number_format($balance, 2) . "</td><td>" . $row['status'] . "</td><td><button>Ação</button></td></tr>";
		}
	}else{
		
	}
	$tabela .= "</tbody></table><script src='js/demo/datatables-demo.js'></script>";
	return $tabela;
}
function tabelaHistSaq($linhas, $investidor){
	global $_CON;
	$tabela = '<table class="table table-bordered no-footer" id="dataTable"><thead><tr><th>Moeda</th><th>Quantidade</th><th>Data</th><th>Status</th></tr></thead><tbody>';
	if($linhas == 0){
		$query = "SELECT * FROM saques WHERE `investidor` = '$investidor' ORDER BY `data`";
	}else{
		$query = "SELECT * FROM saques WHERE `investidor` = '$investidor' ORDER BY `data` DESC LIMIT $linhas";
	}
	
	$result = mysqli_query($_CON, $query); //resultado do select
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			if($row["status"] == 0){
				$tabela .= '<tr align="center">
				<td style="width: 100px;">' . $row["moeda"] . '</td><td>' . $row["qnt"] . '</td><td>' . date("d/m/Y - H:i:s", strtotime($row["data"])) . '</td><td><button class="bt-process" data-toggle="modal" data-target="#myModal" onclick="abrirDetalhesSaque(' . $row['id'] . ')">Processando</button></td>
				</tr>';
			}elseif($row["status"] == 1){
				$tabela .=  '<tr align="center">
				<td>' . $row["moeda"] . '</td><td>' . $row["qnt"] . '</td><td>' . date("d/m/Y - H:i:s", strtotime($row["data"])) . '</td><td><button class="bt-concluido" data-toggle="modal" data-target="#myModal" onclick="abrirDetalhesSaque(' . $row['id'] . ')">Concluído</button></td>
				</tr>';
			}else{
				$tabela .=  '<tr align="center">
				<td>' . $row["moeda"] . '</td><td>' . $row["qnt"] . '</td><td>' . date("d/m/Y - H:i:s", strtotime($row["data"])) . '</td><td><button class="bt-recusado" data-toggle="modal" data-target="#myModal" onclick="abrirDetalhesSaque(' . $row['id'] . ')">Recusado</button></td>
				</tr>';
			}
		}
	}else{
		$tabela .= "<tr align='center'><td colspan='4'>Nenhum histórico encontrado</td></tr>";
	}
	$tabela .= "</tbody></table>";
	return $tabela;
}
function tabelaHistDep($linhas, $investidor){
	global $_CON;
	$tabela = '<table class="table table-bordered no-footer" id="dataTable"><thead><tr><th>Moeda</th><th>Quantidade</th><th>Data</th><th>Status</th></tr></thead><tbody>';
	if($linhas == 0){
		$query = "SELECT * FROM depositos WHERE `investidor` = '$investidor' ORDER BY `data`";
	}else{
		$query = "SELECT * FROM depositos WHERE `investidor` = '$investidor' ORDER BY `data` DESC LIMIT $linhas";
	}
	
	$result = mysqli_query($_CON, $query); //resultado do select
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			if($row["status"] == 0){
				$tabela .= '<tr align="center">
				<td style="width: 100px;">' . $row["moeda"] . '</td><td>' . $row["qnt"] . '</td><td>' . date("d/m/Y - H:i:s", strtotime($row["data"])) . '</td><td><button class="bt-process" data-toggle="modal" data-target="#myModal" onclick="abrirDetalhes(' . $row['id'] . ')">Processando</button></td>
				</tr>';
			}elseif($row["status"] == 1){
				$tabela .= '<tr align="center">
				<td>' . $row["moeda"] . '</td><td>' . $row["qnt"] . '</td><td>' . date("d/m/Y - H:i:s", strtotime($row["data"])) . '</td><td><button class="bt-concluido" data-toggle="modal" data-target="#myModal" onclick="abrirDetalhes(' . $row['id'] . ')">Concluído</button></td>
				</tr>';
			}else{
				$tabela .= '<tr align="center">
				<td>' . $row["moeda"] . '</td><td>' . $row["qnt"] . '</td><td>' . date("d/m/Y - H:i:s", strtotime($row["data"])) . '</td><td><button class="bt-recusado"data-toggle="modal" data-target="#myModal" onclick="abrirDetalhes(' . $row['id'] . ')">Recusado</button></td>
				</tr>';
			}
		}
	}else{
		$tabela .= "<tr align='center'><td colspan='4'>Nenhum histórico encontrado</td></tr>";
	}
	$tabela .= "</tbody></table>";
	return $tabela;
}
?>