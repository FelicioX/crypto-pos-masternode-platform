<?php
include("../seguranca.php");
include("../conn_db.php");
include("../fnc.php");
$moeda = $_POST;

$query = "SELECT * FROM car_dep WHERE id = '" . $moeda['moeda'] . "'";
$result = mysqli_query($conect, $query);

$row = mysqli_fetch_assoc($result);

$query = "SELECT * FROM `" . $row['moeda'] . "` WHERE nome = '" . $_SESSION['usuarioNome'] . "'";
$result = mysqli_query($conect, $query);

$row2 = mysqli_fetch_assoc($result);

echo number_format($row2['moedas'], 8);

?>