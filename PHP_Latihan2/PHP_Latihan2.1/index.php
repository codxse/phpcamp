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
				<th scope="row">Jenis BBM</th>
				<td>
					<input type="checkbox" name="bensinChecked" 
						<?php if (isset($_POST[klikTombol]) && isset($_POST['bensinChecked']))
							echo ' checked="checked"'; ?>/>Bensin<br />
					<input type="checkbox" name="solarChecked"
						<?php if (isset($_POST[klikTombol]) && isset($_POST['solarChecked']))
							echo ' checked="checked"'; ?>/>Solar<br />
					<input type="checkbox" name="pertamaxChecked"
						<?php if (isset($_POST[klikTombol]) && isset($_POST['pertamaxChecked']))
							echo ' checked="checked"'; ?>/>Pertamax
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
	<colgroup style="background-color:#ddd;" />
	<caption>Daftar Harga BBM</caption>
		<thead>
			<tr>
				<th scope="col">Liter</th>
<?php
	if (isset($_POST['bensinChecked'])) {
		echo '
				<th scope="col">Bensin</th>';
	}
	if (isset($_POST['solarChecked'])) {
		echo '
				<th scope="col">Solar</th>';
	}
	if (isset($_POST['pertamaxChecked'])) {
		echo '
				<th scope="col">Pertamax</th>';
	}
?>
				
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
				<td>' . $i . '</td>';
			if (isset($_POST['bensinChecked'])) {
				echo '
				<td align="right"> Rp. ' . number_format($bensinAwal,0,",",".") . '</td>';
			}
			if (isset($_POST['solarChecked'])) {
				echo '
				<td align="right"> Rp. ' . number_format($solarAwal,0,",",".") . '</td>';
			}
			if (isset($_POST['pertamaxChecked'])) {
				echo '
				<td align="right"> Rp. ' . number_format($pertaAwal,0,",",".") . '</td>';
			}
			echo '
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