<!DOCTYPE html>
<html>
<head>
	<title>Contoh 2 - Array Associative</title>
</head>
<body>
	<?php
		$ibukota=array('Jabar'=>'Bandung',
						'Jatim'=>'Surabaya',
						'Jateng'=>'Semarang',
						'Bali'=>'Denpasar');
		/* bisa juga ditulis
		$ibukota['Jabar']='Bandung';
		$ibukota['Jatim']='Surabaya';
		$ibukota['Jateng']='Semarang';
		$ibukota['Bali']='Denpasar';
		*/
		echo 'Kondisi Awal <br />';
		foreach($ibukota as $kota)
			echo $kota . '<br />';

		$ibukota['Sumut']='Medan';
		echo '<hr />Setelah ditambah Sumut => Medan <br />';
		foreach($ibukota as $provinsi=>$kota)
			echo 'Ibukota ' . $provinsi . ' adalah ' . $kota . '<br />';

		echo '<hr />Mengakses secara acak: <br />';
		$kota=$ibukota['Jabar'];
		echo 'Ibu kota Jawa Barat adalah ' . $kota . '<br />';
		echo 'Ibu kota Jawa Tengan adalah ' . $ibukota['Jateng'] . '<br />';
		$prov='Jatim';
		echo 'Ibu kota ' . $prov . ' adalah ' . $ibukota[$prov] . '<br />';

		echo '<hr />Setelah diurutkan ascending berdasarkan isi elemen <br />';
		asort($ibukota);
		foreach($ibukota as $provisi=>$kota)
			echo 'Ibukota ' . $provinsi . ' adalah ' . $kota . '<br />';

		echo '<hr />Setelah diurutkan ascending berdasarkan key <br />';
		ksort($ibukota);
		foreach($ibukota as $provinsi=>$kota)
			echo 'Ibukota ' . $provinsi . ' adalah ' . $kota . '<br />';

		echo '<hr />Setelah diurutkan descending berdasarkan isi elemen <br />';
		arsort($ibukota);
		foreach($ibukota as $provisi=>$kota)
			echo 'Ibukota ' . $provinsi . ' adalah ' . $kota . '<br />';

		echo '<hr />Setelah diurutkan descending berdasarkan key <br />';
		krsort($ibukota);
		foreach($ibukota as $provinsi=>$kota)
			echo 'Ibukota ' . $provinsi . ' adalah ' . $kota . '<br />';
	?>
</body>
</html>