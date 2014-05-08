<?php

	$input = "0212-52011455";

	if(preg_match("^\b0[0-9]{2,3}-[0-9]{6,8}\b^", $input)){
		echo "Nomor Telepon Benar";
	}
	else{
		echo "Nomor Telepon Salah";
	}

?>