<!DOCTYPE html>
<html>
<head>
	<title>Contoh function 2 - Get Client IP</title>
</head>
<body>
	<?php
		function ip_client() {
			return $_SERVER['REMOTE_ADDR'];
		}

		function identitas($nama, $kota) {
			echo 'Nama saya ' . $nama . ' dari ' . $kota;
		}

		identitas('Budi', 'Selamanya');
		echo '<br />';
	    echo $ip_pengunjung = ip_client();
	?>
</body>
</html>