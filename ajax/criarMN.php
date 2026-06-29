<?php
include("../seguranca.php");

include('../conn_db.php');

include('../fnc.php');

$moeda = $_POST['id'];

$query = "SELECT * FROM car_dep WHERE id = '" . $moeda . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

$query = "SELECT * FROM mn WHERE moeda_id = " . $row['id'];
$result = mysqli_query($conect, $query);

$linhas = mysqli_num_rows($result);

$nomemn = $row['moeda'] . "-0" . ($linhas + 1);

$query = "INSERT INTO mn (moeda,moeda_id,cota_total,nome) VALUES ('" . $row['moeda'] . "','" . $row['id'] . "','" . $row['mn_coins'] . "','" . $nomemn . "')";
$result = mysqli_query($conect, $query);

echo listarMasternodes();

?>