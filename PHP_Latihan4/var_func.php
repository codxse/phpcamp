<html>
<head>
	<title>Contoh function 3 - Variable Fungsi</title>
</head>
<body>
	<?php
		function indo() {
			echo 'Selamat datang! <br />';
		}

		function eng() {
			echo 'Welcome! <br />';
		}

		function dutch() {
			echo 'Willkommen! <br />';
		}

		function ita() {
			echo 'Benvenuti! <br />';
		}

		$bahasa='dutch';
		$bahasa();

		$bahasa='indo';
		$bahasa();

		$bahasa='eng';
		$bahasa();

		$bahasa='ita';
		$bahasa();
	?>
</body>
</html>