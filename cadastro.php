<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
cadastroDesativado(); // Chama a função que desativa cadastro ou login para usuário já logados
?>
<style>
.inline-input{
	display: inline-block;
	float: left;
	color: black;
	border: 1 solid black;
}
.label{
	display: inline-block;
	width: 70px;
	float: left;
	color: black;
	text-align: right;
	font-size: 1em;
}
body { 
    background-image: url('images/logo.png');
    background-repeat: no-repeat;
    background-position: center top;
	background-size: cover;
}
</style>
<script>
$('#erro').hide();
function verificaCadastro(){
	
	var nome = $('#exibicao').val();
	if(nome == ''){
		$('#exibicao').css('border', '1px solid #bb2222');
		$('#exibicao').css('background-color', '#ffcccc');
		return;
	}else{
		$('#exibicao').css('border', '1px solid #22bb22');
		$('#exibicao').css('background-color', '#ccffcc');
		
	}
	var email = $('#email').val();
	if(email == ''){
		$('#email').css('border', '1px solid #bb2222');
		$('#email').css('background-color', '#ffcccc');
		return;
	}else{
		$('#email').css('border', '1px solid #22bb22');
		$('#email').css('background-color', '#ccffcc');
		
	}
	var login = $('#login').val();
	if(login == ''){
		$('#login').css('border', '1px solid #bb2222');
		$('#login').css('background-color', '#ffcccc');
		return;
	}else{
		$('#login').css('border', '1px solid #22bb22');
		$('#login').css('background-color', '#ccffcc');
		
	}
	var senha = $('#senha').val();
	if(senha == ''){
		$('#senha').css('border', '1px solid #bb2222');
		$('#senha').css('background-color', '#ffcccc');
		return;
	}else{
		$('#senha').css('border', '1px solid #22bb22');
		$('#senha').css('background-color', '#ccffcc');
		
	}
	var dados = {exibi:nome,mail:email,usuario:login,pass:senha};
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/verificaCadastro.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			
			var data = JSON.parse(response);
			if(!data.status){
				$('#erro').show(250);
				$('#erro').html(data.erro);
			}else{
				alert('Cadastro Efetuado com sucesso');
				$('#erro').show(250);
				$('#erro').html(data.login);
			}
			if(!data.mlogin){
				$('#login').css('border', '1px solid #bb2222');
				$('#login').css('background-color', '#ffcccc');
			}else{
				$('#login').css('border', '1px solid #22bb22');
				$('#login').css('background-color', '#ccffcc');
			}
			if(!data.memail){
				$('#email').css('border', '1px solid #bb2222');
				$('#email').css('background-color', '#ffcccc');
			}else{
				$('#email').css('border', '1px solid #22bb22');
				$('#email').css('background-color', '#ccffcc');
			}
		}
	});
}
</script>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EcoStake - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Register</div>
        <div class="card-body">
          <form method="post" action="valida.php">
            <div class="form-group">
              <div class="form-label-group">
				<input type="text" name="exibicao" id="exibicao" class="form-control" placeholder="Nome de Exibição" autofocus="autofocus">
                <label for="exibicao">Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
				<input type="text" name="email" id="email" class="form-control" placeholder="Email" required="required">
                <label for="email">E-mail</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
			    <input type="text" name="login" id="login" placeholder="Usuário" class="form-control">
                <label for="login">User</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
				<input type="password" name="senha" id="senha" placeholder="Senha" class="form-control">
                <label for="senha">Password</label>
              </div>
            </div>
			<button class="btn btn-primary btn-block" onclick='verificaCadastro();'>Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Already registered?</a>
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