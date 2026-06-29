<?php
include("../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
include ("../conn_db.php");
$mn = $_POST['id'];
//$queryh = "SELECT * FROM `" . $moeda . "` WHERE nome = '" . $_SESSION['usuarioNome'] . "'";
//$result1 = mysqli_query($conect, $queryh);
//$row2 = mysqli_fetch_assoc($result1);
//echo $row2;
//echo "<script>var moedas = " . $row2['moedas'] . ";</script>";

$resposta['mensagem'] = "Do you want to withdraw your quota?</br>The deadline for the withdrawal of quotas of masternode is seven days.";
$resposta['botoes'] = '<button class="btn btn-danger" type="button" data-dismiss="modal">No</button><button class="btn btn-success" type="button" data-dismiss="modal">Yes</button>';

echo json_encode($resposta);
?>