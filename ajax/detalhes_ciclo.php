<?php
include("../conn_db.php");
include("../fnc.php");
$ciclo = $_POST;

echo tabelaCicloDetalhes($ciclo["idd"]);

?>