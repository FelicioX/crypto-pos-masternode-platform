<?php
include("conn_db.php");
ini_set('display_errors', 1);

error_reporting(E_ALL);
$hash = $_GET['hash'];

$query_select = "SELECT * FROM usuarios WHERE hashforgot = '" . $hash . "'";
$select = mysqli_query($conect, $query_select);

$row = mysqli_fetch_assoc($select);

$id = $row['id'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Forgot Password</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <script>
  function newPassword(){
	  if(pass.value == repeat.value){
		var idpass = <?php echo $id; ?>;
		var dados = {newpass:pass.value,id:idpass};
		$.ajax({
			type: 'POST',
			//dataType: 'json',
			url: 'ajax/newPassword.php',
			async: true,
			data: dados,
			success: function(response) {
				alert(response);
				$('#error').html(response);
			}
		});
	  }else{
		  $('#error').html("The two passwords are not the same, please enter the same password in both fields.");
	  }
  }
  </script>
  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">New Password</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>New Password</h4>
            <p>Enter your new password.</p>
          </div>
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="pass" class="form-control" placeholder="Enter new password" required="required" autofocus="autofocus">
                <label for="pass">Enter new password</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="password" id="repeat" class="form-control" placeholder="Repeat Password" required="required" autofocus="autofocus">
                <label for="pass">Repeat Password</label>
              </div>
            </div>
			<div id='error'>
			</div>
            <a class="btn btn-primary btn-block" onclick='newPassword();'>OK</a>
			<div id='resposta'></div>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
            <a class="d-block small" href="login.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
