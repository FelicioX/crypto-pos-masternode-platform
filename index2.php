
<html>
<head>
	<?php include('head.php'); ?>
<style>
	#headerr{
  /*Novamente definimos a largura da div*/
  width:100%;
  /* altura da div */
  height: 400px;
  /* Cor de fundo da div */
  background: #131620;
  margin: 0 auto;
  
  }
button.bt-index{
	width: 200px;
	color: #808387;
	background: linear-gradient(#091216, #202327);
	border: 1px solid #ffffff;
	font-height: bold;
	height: 42px;
	border-radius: 3px;
	font-size: 150%;
}
button.bt-index:hover{
	
	color: #a0a3a7;
	background: linear-gradient(#293236, #495256);
	border: 1px solid #ffffff;
	font-height: bold;
	
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
.titulo{
	font-size: 3em;
	color: white;
}
.subtitulo{
	font-size: 1.5em;
	color: white;
}
@media screen and (max-width: 500px){
button.bt-index{
	width: 150px;
	color: #808387;
	background: linear-gradient(#091216, #202327);
	border: 1px solid #ffffff;
	font-height: bold;
	height: 42px;
	border-radius: 3px;
	font-size: 100%;
}
.titulo{
	font-size: 2.4em;
	color: white;
}
.subtitulo{
	font-size: 1.2em;
	color: white;
}
}
</style>
</head>
<body>
<div id="site">
 
<div id="headerr">

</br>
	<div id='logo2' >
	<img src="img/logo2.png" width='250px' height='250px' align='center'/></img>
	<p><b class='titulo'>Pro Staking Brasil</b><br>
	<b class='subtitulo'>Minerando lucros, colhendo sonhos</b></p>
	</div>
</div>
<div id="conteudo">
	<div id="conteudo-right" style='background: linear-gradient(#131620, #bbbbbb);'>
		<br>
		<div style='text-align: center; margin: 0 auto;'>
			<button type="button" class="bt-index" data-toggle='modal' data-target='#myModal' onclick='iniciarLogin()'>Login</button> <button type="button" class="bt-index" data-toggle='modal' data-target='#myModal' onclick='iniciarCadastro()'>Registrar</button> 
		</div>
		<br>
		<div style='text-align: center;'>
		<?php
		include('conn_db.php');
			$query = "SELECT * FROM car_dep";
			$result = mysqli_query($conect, $query);
			while ($row = mysqli_fetch_array($result)) {
				echo "<div class='moedas'><p><img src='img/moedas/" . $row['moeda'] . ".png' class='img-moedas' align='center'/><br>" . $row['nome'] . "</p></div>";
			}
			
		
		?>
		</div>
		</br>
		
		
	</div>
	
</div>
</br>
<div id="footer"></div>
<br>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id='mtitulo' class="modal-title">Detalhes</h4>
        </div>
        <div id='mbody' class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  </br>
<script type="text/javascript">
function iniciarLogin(){
	$('#mtitulo').html('Login');
    var dados = 1;
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'login.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			$('#mbody').html(response);
		}
	});
}
function iniciarCadastro(){
	$('#mtitulo').html('Cadastro');
    var dados = 1;
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'cadastro.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			$('#mbody').html(response);
		}
	});
}
</script>
</body>
</head>
</html>