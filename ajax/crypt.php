<?php

//$code = $_GET['segc'];

//$tipo = $_GET['tipo'];

/*if($tipo == "a"){
	echo ecrypta($code);
}else{
	echo decrypta($code);
}*/

//echo "Código encriptado - " . ecrypta($code);

//echo "<br><br><br>";
//echo "Revertendo criptografia - " . decrypta(ecrypta($code));


function ecrypta($code){
	$enc_code = "";
	$n = 0;
	while($n < 6){
		switch($code[$n]){
			case 1:
				$enc_code .= "afg";
				break;
			case 2:
				$enc_code .= "hyn";
				break;
			case 3:
				$enc_code .= "clp";
				break;
			case 4:
				$enc_code .= "qve";
				break;
			case 5:
				$enc_code .= "zdt";
				break;
			case 6:
				$enc_code .= "yod";
				break;
			case 7:
				$enc_code .= "btm";
				break;
			case 8:
				$enc_code .= "nkw";
				break;
			case 9:
				$enc_code .= "xpu";
				break;
			case 0:
				$enc_code .= "bfa";
				break;
		}
		$n++;
	}	
	return $enc_code;
}
function decrypta($enc_code){
	$code = "";
	$n = 0;
	while($n < 18){
		$sm = $enc_code[$n] . $enc_code[$n+1] . $enc_code[$n+2];
		switch($sm){
			case "afg":
				$code .= 1;
				break;
			case "hyn":
				$code .= 2;
				break;
			case "clp":
				$code .= 3;
				break;
			case "qve":
				$code .= 4;
				break;
			case "zdt":
				$code .= 5;
				break;
			case "yod":
				$code .= 6;
				break;
			case "btm":
				$code .= 7;
				break;
			case "nkw":
				$code .= 8;
				break;
			case "xpu":
				$code .= 9;
				break;
			case "bfa":
				$code .= 0;
				break;
		}
		$n += 3;
	}
	return $code;
}
?>