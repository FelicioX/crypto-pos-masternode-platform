<?php
//conexão com o servidor
$conect = new mysqli("localhost", "u349814380_lauro", "lucas271212", "u349814380_prost");
//$conect = new mysqli("localhost", "ecostake_admin", "*eCo_server#", "ecostake_pool");
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if ($conect->connect_error) die ("<h1>Falha na conexão com o Banco de Dados!</h1>" . $conect->connect_error);

// Caso a conexão seja aprovada, então conecta o Banco de Dados.
//$db = mysqli_select_db($conect, "u349814380_prost");
/*Configurando este arquivo, depois é só você dar um include em suas paginas php,
isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados
você altera somente um arquivo*/
?>