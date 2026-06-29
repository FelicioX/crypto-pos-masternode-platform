<?php
include("../conn_db.php");
ini_set('display_errors', 1);

error_reporting(E_ALL);
$pass = $_POST['newpass'];
$id = $_POST['id'];

$query_update = "UPDATE usuarios SET hashforgot = '', password = '" . MD5($pass) . "' WHERE id = " . $id;
$update = mysqli_query($conect, $query_update);

echo $update;
if($update == true){
	echo "Password changed sucessifully!";
}else{
	
}

?>