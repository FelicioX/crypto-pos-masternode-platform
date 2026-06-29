        <form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
          <div id="image-preview-div" style="display: none">
            <img id="preview-img" src="noimage" width='128' height='128'>
          </div>
          <div class="form-group">
            <input class="btn btn-lg btn-primary" type="file" name="file" id="file" required>
        <div id="message"></div>
      </div>
    </div>
	<div class="form-label-group">
		<input class="form-control" aria-describedby="tickerd" type="text" name="ticker" id="ticker" placeholder="Ticker"/>
		<label for="ticker">Ticker</label>
	</div></br>
	<div class="form-label-group">
		<input class="form-control" aria-describedby="nomed" type="text" name="nome" id="nome" placeholder="Nome"/>
		<label for="nome">Nome</label>
	</div></br>
	<div class="form-label-group">
		<input class="form-control" aria-describedby="carteirad" type="text" name="carteira" id="carteira" placeholder="Carteira"/>
		<label for="carteira">Carteira</label>
	</div></br>
	<div>
	</form>
		<p id="botao"><input class="btn btn-primary" type="submit" id="confima" value="Cadastrar" onClick='cadastraMoeda()' data-dismiss="modal"/></p>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="ajax/upload_image.js"></script>
<script>
function cadastraMoeda(){
	var dados = $("#upload-image-form").serialize();
	
	$.ajax({
		type: 'POST',
		//dataType: 'json',
		url: 'ajax/cadastrar_novamoeda.php',
		async: true,
		data: dados,
		success: function(response) {
			//location.reload();
			$('#tabela').html(response);
		}
	});
}
</script>