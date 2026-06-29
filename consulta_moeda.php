<?php
include("conn_db.php");

$post = $_POST;

$select = "SELECT * FROM car_dep";
$result = mysqli_query($conect, $select); //resultado do select

$retorno = "";
while($row = mysqli_fetch_array($result)){
	if($row['moeda'] == $post['mod']){
		$retorno = $row;
		break;
	}
}
echo json_encode($retorno);
?>