<?php
include("../seguranca.php");

include('../conn_db.php');

$moeda = $_POST['id'];

$query = "SELECT * FROM car_dep WHERE id = '" . $moeda . "'";
$result = mysqli_query($conect, $query);
$row = mysqli_fetch_assoc($result);

echo $row['mn_coins'];

?>