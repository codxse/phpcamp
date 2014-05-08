<?php

	$input = "Jalan Bali Bensar";

	if(preg_match("^\b[bB][aA][lL][iI]\b^", $input)){
		echo "Jalan Benar <br> ".$input;
	}
	else{
		echo "Jalan Salah <br>".$input;
	}

?>