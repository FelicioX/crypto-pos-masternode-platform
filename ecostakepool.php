<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
include('conn_db.php');

$query = "SELECT * FROM car_dep";
$result = mysqli_query($conect, $query);

while ($row = mysqli_fetch_array($result)) {
	
	$query = "UPDATE `" . $row['moeda'] . "` SET `moedas` = '1' WHERE nome = 'ecostakepool'";
	$result2 = mysqli_query($conect, $query) or die(mysqli_error($conect));
	echo $result2 . "<br>";
}

echo 'pronto';
?>