<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
include('fnc.php');
include ("conn_db.php");
include('ajax/crypt.php');
verificaAdm();

$mn = $_GET['mn'];

$select = "SELECT * FROM mn WHERE id = '" . $mn . "'";
$result = mysqli_query($conect, $select); //resultado do select


$masternode = mysqli_fetch_assoc($result);

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
			<?php $listaCotas = listarCotas($masternode['id']); ?>
          <!-- Breadcrumbs-->
          <ol class="breadcrumb" style='margin-top:35 px;'>
            <li class="breadcrumb-item">
              <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Masternode - <?php echo $masternode['nome']; ?></li>
          </ol>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Cotas - <span id='colateral'><?php echo $listaCotas['cota']; ?></span></div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="tabela">
				  <?php echo $listaCotas['tabela']; ?>
				</div>
              </div>
            </div>
        </div>
		<!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Adicionar Cotas</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
					<thead><tr><th>Usuário</th><th>Moedas</th><th>Ação</th><tr></thead>
					<tbody>
					<tr><td><?php echo listaUsuarios(); ?></td><td><input class='form-control' type='text' id='qnt' maxlength='50'></td><td><button class='btn btn-default' onClick='addCota()'>Add</button></td></tr>
					</tbody>
				</table>
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
function criarMn(){
	var mod = $('#moeda').val();
	var mm = {id:mod};
	var dados = mm;
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/criarMN.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			$('#masternodes').html(response);
		}
	});
}
function addCota(){
	var user = $('#users').val();
	var moedas = $('#qnt').val();
	var masternode = <?php echo $masternode['id']; ?>;
	var mm = {us:user,qnt:moedas,mn:masternode};
	var dados = mm;
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/addCota.php',
		async: true,
		data: dados,
		success: function(response) {
			response = JSON.parse(response);
			$('#tabela').html(response.tabela);
			$('#colateral').html(response.cota);
		}
	});
}
$('#moeda').change(function(){
	if(jQuery(this).val() != "a"){
		
		var mod = jQuery(this).val();
		var mm = {id:mod};
		var dados = mm;
		$.ajax({
			type: 'POST',
			//dataType: 'json',
			url: 'ajax/collateralMn.php',
			async: true,
			data: dados,
			success: function(response) {
				//location.reload();
				$('#collateral').html(response);
			}
		});
	}else{
		
	}
});
</script>
</html>
