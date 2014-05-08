<?php

	$input = "12299099";


	if(preg_match("^\b(101|107|122)[0-9]{5}\b^", $input)){
		echo "NIM Benar <br>";
		if(preg_match("^(10199|10799|12299)[0-9]{3}^", $input)){
			echo "Mahasiswa Angkatan 99</br>".$input;
		}

	}
	else{
		echo "NIM Salah";
	}
?>
