<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
include('fnc.php');
include ("conn_db.php");
include('ajax/crypt.php');
verificaAdm();
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
              <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Saques</li>
          </ol>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Adm - Saques</div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="tabela">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead><tr><th>Investidor</th><th>CoInvestidor</th><th>Moeda</th><th>Quantidade</th><th>Data</th><th>Ação</th></tr></thead>
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
				</div>
              </div>
            </div>
        <div class="text-center">
		  <?php include('footer.php'); ?>
		  </div>
        </div>
		
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © EcoStake 2018</span>
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
          <div class="modal-footer">
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
          <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-dismiss="modal">OK</button>
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
          <div class="modal-footer">
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

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

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
				$('#mtitulo').html("Saque - " + response.nome);
			}else{
				$('#mtitulo').html("Depósito - " + response.nome);
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
function detalhesDeposito(x){
	var mm = {id:x};
	var dados = mm;
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/detalhes_dep.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			$('#mbody').html(response);
		}
	});
}
function recusadeposito(x){
//var dados = $('#' + x).serialize();
var obs = $('#obs').val();

var mm = {id:x,ob:obs};
var dados = mm;
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/admrecusa_dep.php',
		async: true,
		data: dados,
		success: function(response) {
			$('#tabela').html(response);
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
function detalhesSaque(x){
	var mm = {id:x};
	var dados = mm;
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/detalhes_saq.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			$('#mbody').html(response);
		}
	});
}
function recusaSaque(x){
//var dados = $('#' + x).serialize();
var obs = $('#obs').val();

var mm = {id:x,ob:obs};
var dados = mm;
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/admrecusa_saq.php',
		async: true,
		data: dados,
		success: function(response) {
			$('#tabela').html(response);
		}
	});

}
</script>
</html>
