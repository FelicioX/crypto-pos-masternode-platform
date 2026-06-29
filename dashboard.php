<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
include('fnc.php');
include ("conn_db.php");

$select = "SELECT * FROM usuarios WHERE nome = 'lauro'";
$result = mysqli_query($conect, $select); //resultado do select


$row = mysqli_fetch_assoc($result);



$select = "SELECT * FROM depositos WHERE `investidor` = '" . $_SESSION['usuarioNome'] . "' AND `status` = 1";
$result = mysqli_query($conect, $select); //resultado do select
$dep_mut = 0;
//echo $_SESSION['usuarioNome'];
while ($row = mysqli_fetch_array($result)) {
	if($row['moeda'] == "mutualcoin"){
		$dep_mut += $row["qnt"];
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EcoStake - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

	<style>
	.deposit{
		
		background: linear-gradient(rgb(72, 249, 52), rgb(43, 186, 27));
		color: #082b04;
		border: 1px solid #0f2b0c;
		padding: 2px;
		padding-left: 8px;
		padding-right: 8px;
		border-radius: 2px;
		font-size: 12px;
		font-weight: bold;
	}
	.withdraw{
		
		background: linear-gradient(rgb(249, 88, 52), rgb(186, 58, 26));
		color: rgb(43, 4, 4);
		border: 1px solid #2b0c0c;
		padding: 2px;
		padding-left: 8px;
		padding-right: 8px;
		border-radius: 2px;
		font-size: 12px;
		font-weight: bold;
	}
	</style>
  </head>

  <body id="page-top">

    

      <?php include('top.php'); ?>

    <div id="wrapper" style='padding-top: 50px;'>

      <?php include('sidebar.php'); ?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb" style='margin-top:35 px;'>
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
		  <!-- Breadcrumbs-->
          <!--<ol class="breadcrumb" style='margin-top:35 px; border: 1px solid #2b0c0c; background: #f95834;'>
            <li class="breadcrumb-item" style="backgroud-color: #e01f1f; color: #2b0c0c;">
              <b>Sprouts</b> will be delisted from EcoStakePool, please remove your coins as soon as possible.
            </li>
          </ol>-->
		 <ol class="breadcrumb" style='margin-top:35 px; border: 1px solid #123801; background: #a4ff7a;'>
            <li class="breadcrumb-item" style="backgroud-color: #a4ff7a; color: #123801;">
               <b>AVISO</b> , nossos saques e depositos acontecem de 1h a 24h após a confirmação do stake, devido aos ciclos do mesmo. obrigado pela compreenção  . <b></b>.</br>
			  <b>WARNING</b> , our withdrawals and deposits may take from 1h to 24h to be processed due to stake cycles, thank you for understanding.
                          
            </li>
          </ol>
		 <ol class="breadcrumb" style='margin-top:35 px; border: 1px solid #123801; background: #a4ff7a;'>
            <li class="breadcrumb-item" style="backgroud-color: #a4ff7a; color: #123801;">
              Swap de <b>Calura</b> concluido , a troca foi 1:1 , em caso de retirada certifique - se que o endereço esteja atualizado . <b></b>.</br>
			  <b>Calura</b> 
                          Swap completed, the exchange was 1:1 , in case of withdrawal make sure the address is up to date.
            </li>
          </ol>
<ol class="breadcrumb" style='margin-top:35 px; border: 1px solid #123801; background: #a4ff7a;'>
            <li class="breadcrumb-item" style="backgroud-color: #a4ff7a; color: #123801;">
              Swap de <b>MIC</b> concluido , a troca foi 5:1 , em caso de retirada certifique - se que o endereço esteja atualizado , não deposite mic antiga estamos na nova cadeia. <b></b>.</br>
			  <b>Mic3</b> 
                          Swap completed, the exchange was 5:1, in case of withdrawal make sure the address is up to date,
do not deposit old mic we are in the new chain. <b></b> 
            </li>
          </ol>
		  <ol class="breadcrumb" style='margin-top:35 px; border: 1px solid #123801; background: #a4ff7a;'>
            <li class="breadcrumb-item" style="backgroud-color: #a4ff7a; color: #123801;">
               <b>Subx</b> swap concluido , troca 1:1 , para retirada certifique que seu endereço esteja na nova corrente . <b></b>.</br>
			  <b>Subx</b> 
                          swap completed , exchange 1:1, for withdrawal make sure your address is in the new chain. <b></b> 
            </li>
          </ol>
		  <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Balance</div>
            <div class="card-body">
              <div class="table-responsive">
          
		    <?php
			$query = "SELECT * FROM car_dep ORDER BY nome ASC";
			$result = mysqli_query($conect, $query); //resultado do select
			$table_mn = "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'><thead><tr style='text-align:center;'><th></th><th>Coin</th><th>Info</th><th>Balance</th><th>Deposit</th><th>Withdraw</th></tr></thead><tbody>";
			$table = "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'><thead><tr style='text-align:center;'><th></th><th>Coin</th><th>Info</th><th>Balance</th><th>Deposit</th><th>Withdraw</th></tr></thead><tbody>";
			while ($row = mysqli_fetch_array($result)) {
				$query2 = "SELECT * FROM `" . $row['moeda'] . "` WHERE nome = '" . $_SESSION['usuarioLogin'] . "' AND coinvestidor = ''";
				$result2 = mysqli_query($conect, $query2);
				if($result2 != FALSE){
					$row2 = mysqli_fetch_assoc($result2);
					$moedas_h[$row['moeda']] = $row['nome'];
					
				}/*
				
				
				$select = "SELECT * FROM depositos WHERE `investidor` = '" . $_SESSION['usuarioNome'] . "' AND coinvestidor = '' AND `status` = 1";
				$sresult = mysqli_query($conect, $select); //resultado do select
				$dep = 0;
				
				while ($row3 = mysqli_fetch_array($sresult)) {
					if($row3['moeda'] == $row['moeda']){
						$dep += $row3["qnt"];
					}
				}
				$select2 = "SELECT * FROM saques WHERE `investidor` = '" . $_SESSION['usuarioNome'] . "' AND coinvestidor = '' AND `status` = 1";
				$sresult2 = mysqli_query($conect, $select2); //resultado do select
				$saq = 0;
				while ($row4 = mysqli_fetch_array($sresult2)) {
					if($row4['moeda'] == $row['moeda']){
						$saq += $row4["qnt"];
					}
				}
				
				$query3 = "SELECT * FROM block_stakes WHERE moeda = '" . $row['moeda'] . "'";
				$stkresult = mysqli_query($conect, $query3);
				$stakes = 0;
				while($row5 = mysqli_fetch_array($stkresult)){
					$part = json_decode($row5['participantes']);
					
					if(property_exists($part, $_SESSION['usuarioNome'])){
						$nome = $_SESSION['usuarioNome'];
						$stakes += $part->$nome->moedas;
					}
					
					
				}
				$query3 = "SELECT * FROM tips WHERE moeda = '" . $row['moeda'] . "' AND de = '" . $_SESSION['usuarioNome'] . "'";
				$tipderesult = mysqli_query($conect, $query3);
				$tipde = 0;
				if(mysqli_num_rows($tipderesult) > 0){
					while($row6 = mysqli_fetch_array($tipderesult)){
						$tipde += $row6['qnt'];
					}
				}
				
				$query3 = "SELECT * FROM tips WHERE moeda = '" . $row['moeda'] . "' AND para = '" . $_SESSION['usuarioNome'] . "'";
				$tippararesult = mysqli_query($conect, $query3);
				$tipara = 0;
				if(mysqli_num_rows($tippararesult) > 0){
					while($row7 = mysqli_fetch_array($tippararesult)){
						$tippara += $row7['qnt'];
					}
				}
				
				$tip = $tippara - $tipde;*/
				$query3 = "SELECT * FROM `" . $row['moeda'] . "` WHERE nome = '" . $_SESSION['usuarioNome'] . "'";
				$moedaresult = mysqli_query($conect, $query3);
				$userbalance = mysqli_fetch_assoc($moedaresult);
				//if($row['stake'] == 1){
					$table .= "<tr style='text-align:center;'><td><img width='24' height='24' src='images/coinlogos/" . $row['moeda'] . ".png' /></td><td>" . $row['nome'] . "</td><td><a href='" . $row['site'] . "' target='_blank'>" . $row['site'] . "</a></td><td>" . round($userbalance['moedas'], 2) . "</td><td>";
					if($row['status'] != 3){
						$table .= "<button class='deposit' id='depositar' data-toggle='modal' data-target='#myModal' OnClick='abrirModal";
						$table .= '("dep","' . $row['moeda'] . '")';
						$table .= "'>Deposit</button>";
					}
					$table .= "</td><td>";
					$table .= "<button id='retirar' data-toggle='modal' data-target='#myModal' class='withdraw' OnClick='abrirModal";
					$table .= '("saque","' . $row['moeda'] . '")';
					$table .= "'>Withdraw</button>";
					$table .= "</td></tr>";
				//}
				if($row['mn'] == 1){
					$table_mn .= "<tr style='text-align:center;'><td><img width='24' height='24' src='images/coinlogos/" . $row['moeda'] . ".png' /></td><td>" . $row['nome'] . "</td><td><a href='" . $row['site'] . "' target='_blank'>" . $row['site'] . "</a></td><td>" . round($userbalance['moedas'], 2) . "</td><td>";
					if($row['status'] != 3){
						$table_mn .= "<button class='deposit' id='depositar' data-toggle='modal' data-target='#myModal' OnClick='abrirModal";
						$table_mn .= '("dep","' . $row['moeda'] . '")';
						$table_mn .= "'>Deposit</button>";
					}
					$table_mn .= "</td><td>";
					$table_mn .= "<button id='retirar' data-toggle='modal' data-target='#myModal' class='withdraw' OnClick='abrirModal";
					$table_mn .= '("saque","' . $row['moeda'] . '")';
					$table_mn .= "'>Withdraw</button>";
					$table_mn .= "</td></tr>";
				}
				
			}
			$table .= "</tbody></table>";
			$table_mn .= "</tbody></table>";
			echo $table;
			?>

			  </div>
            </div>
		  </div>
		  <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              MasterNodes</div>
            <div class="card-body">
              <div class="table-responsive">
			  <?php echo listaMnDashboard($_SESSION['usuarioID']); ?>
			  </div>
			</div>
		  </div>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              History of Deposits</div>
            <div class="card-body">
              <div class="table-responsive">
                <?php echo tabelaHistDep(5, $_SESSION['usuarioLogin']); ?>
              </div>
            </div>
		  </div>
		  <div class="card mb-3">
			<div class="card-header">
              <i class="fas fa-table"></i>
              History of Withdraws</div>
            <div class="card-body">
              <div class="table-responsive">
                <?php echo tabelaHistSaq(5, $_SESSION['usuarioLogin']); ?>
              </div>
            </div>
		  </div>
		  <div class="card mb-3">
			<div class="card-header">
              <i class="fas fa-table"></i>
              Ciclos</div>
            <div class="card-body">
              <div class="table-responsive">
                <?php
				echo '<select id="moedas_pool" style="width: 150px;"><option id="a" value="a">Selecione a Moeda</option>';
						foreach($moedas_h as $key => $r){
							echo '<option id="' . $key . '" value="' . $key . '">' . $r . '</option>';
						}
						echo "</select>";
				?>
				</div>
				<div id='sciclo' style='display: inline-block;'>
				<select id='ciclos' style="width: 80px; margin-bottom: 15px;">
					<option id="a" value="a">Ciclo</option>
				</select>
				</div></br>
				<div id='tabela-ciclo' class='tabelas'>
				</div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

		  <div class="text-center">
		  <?php include('footer.php'); ?>
        </div>
		
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © EcoStakePool 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer1">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
	<!-- Details Modal-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mtitulo">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id='mbody'>Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer" id='mfooter'>
            
          </div>
        </div>
      </div>
    </div>
	<!-- Details Modal-->
    <div class="modal fade" id="Logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mtitulo">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id='mbody'>Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer1">
            <button class="btn btn-primary" type="button" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>


  </body>
<script type="text/javascript" language="javascript">
function abrirModal(tipo,moeda){
	var id = "#janela1";
	
	var mm = {mod:moeda};
	var dados = mm;
	//dados.serialize;
	//var dados = $('#mut').serialize();
	//alert(dados);
	var moed;
	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: 'consulta_moeda.php',
		async: true,
		data: dados,
		success: function(response) {
			if(tipo == "saque"){
				$('#mtitulo').html("Withdraw - " + response.nome);
			}else{
				$('#mtitulo').html("Deposit - " + response.nome);
			}
			
		}
	});
	if(tipo == 'saque'){
		$.ajax({
		
			type: 'POST',
			//dataType: 'json',
			url: 'ajax/saque.php',
			async: true,
			data: dados,
			success: function(response) {
				
				$('#mbody').html(response);
			}
		});
	}else{
		$.ajax({
		
			type: 'POST',
			//dataType: 'json',
			url: 'ajax/deposito.php',
			async: true,
			data: dados,
			success: function(response) {
				$('#mbody').html(response);
			}
		});
	
	}
	
	
	
}
function saqueMn(mn){
	var mm = {id:mn};
	var dados = mm;
	$('#mtitulo').html('Withdraw - Masternode');
	$.ajax({
		
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/saquemn.php',
		async: true,
		data: dados,
		success: function(response) {
			response = JSON.parse(response);
			$('#mbody').html(response.mensagem);
			$('#mfooter').html(response.botoes);
		}
	});
}
function abrirDetalhes(x){
	var mm = {id:x};
	var dados = mm;
	$('#mtitulo').html('Detalhes');
	$.ajax({
		
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/userdetalhes_dep.php',
		async: true,
		data: dados,
		success: function(response) {
			$('#mbody').html(response);
		}
	});
}
function abrirDetalhesSaque(x){
	var mm = {id:x};
	var dados = mm;
	$('#mtitulo').html('Detalhes');
	$.ajax({
		
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/userdetalhes_saq.php',
		async: true,
		data: dados,
		success: function(response) {
			$('#mbody').html(response);
		}
	});
}
$('#moedas_pool').change(function(){
	if(jQuery(this).val() != "a"){
		
		var mod = jQuery(this).val();
		var mm = {moeda:mod};
		var dados = mm;
		$.ajax({
			type: 'POST',
			//dataType: 'json',
			url: 'ajax/carregaCiclos.php',
			async: true,
			data: dados,
			success: function(response) {
				//location.reload();
				$('#sciclo').html(response);
			}
		});
	}else{
		
	}
});
</script>
</html>
