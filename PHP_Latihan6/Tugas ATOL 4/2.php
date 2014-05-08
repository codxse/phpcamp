<?php

	$input = "12211099";

	if(preg_match("^\b(101|107|122)[0-9]{5}\b^", $input)){
		echo "NIM Benar";
	}
	else{
		echo "NIM Salah";
	}

?>