<?php

	$input = "54201145";

	if(preg_match("^\b[0-9]{6,8}\b^", $input)){
		echo "format kode telepon benar</br>";
		echo "021-".$input;
	}

?>