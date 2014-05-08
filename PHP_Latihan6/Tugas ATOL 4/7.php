<?php

	$input = "ismailzakky@yahoo.co.id";

	if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$^",$input)){
		echo "Bukan Email";
	}
	else{
		echo "Email Benar<br>";
		if(preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@yahoo\.(com)||(co\.id)\b^",$input)){
			echo "Email Dengan Server Yahoo<br>";
		}
		else{
			echo "Bukan Dari Server Yahoo";
		}
	}

?>