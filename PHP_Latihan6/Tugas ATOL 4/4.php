<?php

	$input ="40123";

	if(preg_match("^\b4[0-9]{4}^", $input)){
		echo "Kode Pos Benar";
	}
	else{
		echo "Kode Pos Salah";
	}

?>