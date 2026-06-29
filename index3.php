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
	body{
	  background: linear-gradient(
      rgba(0, 0, 0, 0.9), 
      rgba(0, 0, 0, 0.1),
	  rgba(0, 0, 0, 0.9)
    ), 
	  url("images/index.jpg");
	  background-color: #111; /* Used if the image is unavailable */
	  background-position: center; /* Center the image */
	  background-repeat: no-repeat; /* Do not repeat the image */
	  background-size: cover;
	  

		
	}
	.moedas{
	width: 150px;
	height: 100px;
	display: inline-block;
	margin: 15px 15px 0 15px;
	color: #ffffff;
	font-height: bold;
	border: 2px solid #white;
}
.img-moedas{
	width: 5em;
	height: 5em;
}
.bt-index{
	width: 200px;
	color: #808387;
	background: linear-gradient(#091216, #202327);
	border: 1px solid #ffffff;
	font-height: bold;
	height: 42px;
	border-radius: 3px;
	font-size: 150%;
	padding: 5px;
}
.bt-index:hover{
	
	color: #a0a3a7;
	background: linear-gradient(#293236, #495256);
	border: 1px solid #ffffff;
	font-height: bold;
	
}
	</style>
  </head>

  <body id="page-top" style='margin-top: 0px; padding: 0px;'>



    <div id="wrapper" style='padding-top: 0px; margin-top: 0px;'>

      <div id="content-wrapper" style='padding-top: 0px; margin-top: 0px;'>

        <div class="container-fluid" style='padding-top: 0px; margin-top: 0px;'>
			<div class="card-body" style='text-align: center;'><img src='images/logo5.png'/></div>
        </div>

		<div id="conteudo-right">
		<br>
		<div style='text-align: center; margin: 0 auto;'>
			<a href='login.php' class='bt-index'>Login</a> <a href='cadastro.php' class='bt-index'>Register</a> 
		</div>
		<br>
		<div style='background-color: #fff; height: 1px; width: 80%;'></div></br>
		<div style='text-align: center;'>
		<?php
		include('conn_db.php');
			$stakes = '';
			$mn = '';
			$query = "SELECT * FROM car_dep";
			$result = mysqli_query($conect, $query);
			while ($row = mysqli_fetch_array($result)) {
				if($row['mn'] == 0){
					$stakes .= "<div class='moedas'><p><img src='images/coinlogos/" . $row['moeda'] . ".png' class='img-moedas' align='center'/><br>" . $row['nome'] . "</p></div>";
				}else{
					$mn .= "<div class='moedas'><p><img src='images/coinlogos/" . $row['moeda'] . ".png' class='img-moedas' align='center'/><br>" . $row['nome'] . "</p></div>";
				}
			}
			echo $stakes;
		
		?>
		</div>
		</br>
		<div style='text-align: center;'>
			<?php echo $mn; ?>
		</div>
		
		
	</div>
        
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer" style='color: #fff; background-color: transparent;'>
          <div class="container my-auto" >
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
</html>
