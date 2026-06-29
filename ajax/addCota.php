<?php
include("../seguranca.php");

include('../conn_db.php');

include('../fnc.php');

$cota = $_POST;

$query = "INSERT INTO cotas_mn (user_id,mn_id,qnt,status) VALUES ('" . $cota['us'] . "','" . $cota['mn'] . "','" . $cota['qnt'] . "','1')";
$result = mysqli_query($conect, $query);

$retorno = listarCotas($cota['mn']);



echo json_encode($retorno);

?>