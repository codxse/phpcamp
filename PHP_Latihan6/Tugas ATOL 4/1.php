<?php

	$input = "ismailzakky@gmail.com";

	if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$^",$input)){
		echo "Bukan Email";
	}
	else{
		echo "Email Benar<br>";
		if(preg_match("^@yahoo.com\b^",$input)){
			echo "Email Dengan Server Yahoo<br>";
		}
		else{
			echo "Bukan Dari Server Yahoo";
		}
	}

?>