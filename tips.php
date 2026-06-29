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
            <li class="breadcrumb-item active">Tips</li>
          </ol>

		  <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tips - <span id='saldo'>0</span></div>
            <div class="card-body">
              <div class="table-responsive">
			  <form id='tip_coin'>
                <table class="table table-bordered" width="100%" cellspacing="0">
					<thead><tr><th>Coin</th><th>Amount</th><th>User</th></thead></tr><tbody>
					<tr><td><?php echo listaMoedas(); ?></td><td><input class='form-control' type='text' id='qnt' maxlength='50'></td><td><?php echo listaUsuarios(); ?></td></tr>
					</tbody>
				</table></br>
				</form>
				<button class='btn btn-default' onClick='sendTips()' data-toggle="modal" data-target="#tipModal">Send</button></form>
              </div>
            </div>
		  </div>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              My Tips</div>
            <div class="card-body">
              <div id='myTips' class="table-responsive">
                <?php echo tabelaMyTips(); ?>
              </div>
            </div>
		  </div>
		  <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              My Received Tips</div>
            <div class="card-body">
              <div id='myTips' class="table-responsive">
                <?php echo tabelaReceiveTips(); ?>
              </div>
            </div>
		  </div>
<br><br><br><br><br><br>
        <div class="text-center">
		  <?php include('footer.php'); ?>
		  </div>
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

	  <div id='tip_status' style='position: fixed; right: 10px; bottom: 75px; width: auto; height: 100px; background: #4dd110; border: 1px solid #184703;'>
	    <div id='tip_s_top' style='padding: 4px; font-size: 12px; color: white; top: 0; width: 100%; height: 27px; border-bottom: 1px solid #3ba30b;'>
			<b>Tip accepted!</b>
		</div>
		<div id='tip_s_body' style='padding: 4px; border-top: 1px solid #44bc0d; font-size: 12px; color: white;'>
		<b>Coin:</b> thecoin<br />
		<b>To:</b> User<br />
		<b>Amount:</b> 0.00000000
		</div>
	
	  </div>
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
    <div class="modal fade" id="tipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
setTimeout(function() {
	$('#tip_status').fadeOut('fast');}, 100);
function sendTips(){
	var dados = {coins:jQuery($('#coins')).val(),qnt:jQuery($('#qnt')).val(),users:jQuery($('#users')).val()};
	$('#mtitulo').html('Tip');
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/confereTip.php',
		async: true,
		data: dados,
		success: function(response) {
			response = JSON.parse(response);
			$('#mbody').html(response.mensagem);
			$('#mfooter').html(response.footer);
		}
	});
}
function confirmaTip(){
	var dados = {coins:jQuery($('#coins')).val(),qnt:jQuery($('#qnt')).val(),users:jQuery($('#users')).val()};
	
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/confirmaTip.php',
		async: true,
		data: dados,
		success: function(response) {
			response = JSON.parse(response);
			$('#tip_s_body').html('<b>Coin:</b> ' + response.coin + '<br /><b>To:</b> ' + response.para + '<br /><b>Amount:</b> ' + response.qnt);
			$('#saldo').html(response.saldo);
			$('#myTips').html(response.mytips);
			$('#tip_status').fadeIn('fast');
			setTimeout(function() {
			$('#tip_status').fadeOut('slow');}, 5000);
			
		}
	});
}
$('#coins').change(function(){
	if(jQuery(this).val() != 'a'){
		
		var mod = jQuery(this).val();
		var mm = {moeda:mod};
		var dados = mm;
		$.ajax({
			type: 'POST',
			//dataType: 'json',
			url: 'ajax/tipCarregaSaldo.php',
			async: true,
			data: dados,
			success: function(response) {
				//location.reload();
				$('#saldo').html(response);
			}
		});
	}else{
		
	}
});
</script>
</html>
