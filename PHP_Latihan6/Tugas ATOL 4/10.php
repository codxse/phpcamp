<?php

	$input = "Ini Adalah Kota BDG Tercinta";

	if(preg_match("^\b([bB][aA][nN][dD][uU][nN][gG])|([bB][dD][gG])\b^", $input)){
		echo "benar </br> ".$input;
	}
	else{
		echo "salah <br> ".$input;
	}

?>