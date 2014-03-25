<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Tugas Pertemuan 2 PHP</title>
</head>
<body>
	<form action="index.php" method="POST">
		<table border="1">
			<colgroup style="background-color:#ddd;" />
			<tr>
				<th scope="row">Liter Awal</th>
				<td>
					<select name="literAwal">
<?php
	for ($i=1;$i<=100;$i++) {
		if (isset($_POST['klikTombol']) && $literAwal != $i) {
			echo '		<option value="' . $i . '">' . $i . '</option>';
		} else {
			echo '		<option value="' . $i . '" selected="selected">' . $i . '</option>';
		}
	}
?>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row">Liter Akhir</th>
				<td>
					<select name="literAkhir">
<?php
	for ($i=1;$i<=100;$i++) {
		if (isset($_POST['klikTombol']) && $_POST['literAkhir'] == $i) {
			echo '		<option value="' . $i . '" selected="selected">' . $i . '</option>';
		} else {
			echo '		<option value="' . $i . '">' . $i . '</option>';
		}
	}
?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Tampilkan" name="klikTombol" />
				</td>
			</tr>
		</table>
	</form>


<!-- THE CODE GOES HERE -->	
<?php 
	if(isset($_POST['klikTombol'])) {
?>
	<br />
	<table border="1">
	<caption>Daftar Harga BBM</caption>
		<thead>
			<tr>
				<th scope="col">Liter</th>
				<th scope="col">Bensin</th>
				<th scope="col">Solar</th>
				<th scope="col">Pertamax</th>
			</tr>
		</thead>
		<tbody>
<?php
		$bensin = 4500;
		$solar = 5000;
		$pertamax = 6500;
		$literAwal = $_POST['literAwal'];
		$literAkhir = $_POST['literAkhir'];

		if ($literAwal > $literAkhir) {
			$temp = $literAwal;
			$literAwal = $literAkhir;
			$literAkhir = $temp;
		}

		$bensinAwal = $bensin * $literAwal;
		$solarAwal = $solar * $literAwal;
		$pertaAwal = $pertamax * $literAwal;

		for ($i=$literAwal;$i<=$literAkhir;$i++) {
			echo '
			<tr>
				<td>' . $i . '</td>
				<td>Rp. ' . $bensinAwal . '</td>
				<td>Rp. ' . $solarAwal . '</td>
				<td>Rp. ' . $pertaAwal . '</td>
			</tr>';

			$bensinAwal += $bensin;
			$solarAwal += $solar;
			$pertaAwal += $pertamax;
		}
	}	
?>
		</tbody>
	</table>

</body>
</html>