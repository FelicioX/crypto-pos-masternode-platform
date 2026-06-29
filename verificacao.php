<?php
$login = $_GET['login'];
$hash = $_GET['codigo'];

include("conn_db.php");

$query_select = "SELECT hashver FROM usuarios WHERE nome = '" . $login . "'";
$select = mysqli_query($conect, $query_select);

$row = mysqli_fetch_assoc($select);

if($row['hashver'] == $hash){
	$query = "UPDATE usuarios SET ativacao='1' WHERE nome = '" . $login . "'";
	$result = mysqli_query($conect, $query);
	header("Location: login.php");
}else{
	header("Location: cadastro.php");
}

?>