<!DOCTYPE html>
<html>
<head>
	<title>Contoh 1</title>
</head>
<body>
	<?php
		$kampus=array('Universitas', 'Komputer', 'Indonesia');
		/* bisa juga ditulis
		$kampus[]="Universitas";
		$kampus[]="Komputer";
		$kampus[]="Indonesia";
		*/
		echo 'Kondisi Awal: <br />';
		for($i=0; $i<count($kampus);$i++)
			echo 'elemen ' . $i . ': ' . $kampus[$i] . '<br />';
		echo '<hr />';

		array_push($kampus, 'Bandung'); // sama dengan -> $kampus[]="Bandung";
		echo 'Setelah ditambah "Bandung" <br />';
		for($i=0; $i<count($kampus);$i++)
			echo 'elemen ' . $i . ': ' . $kampus[$i] . '<br />';
		
		sort($kampus);
		echo 'Setelah diurutkan ascending <br />';
		foreach($kampus as $element)
			echo $element . '<br />';
		echo '<hr />';

		rsort($kampus);
		echo 'Setelah diurutkan descending/reverse <br />';
		foreach($kampus as $no=>$element)
			echo 'Elemen' . $no . ': ' . $element . '<br />';
	?>		
</body>
</html>