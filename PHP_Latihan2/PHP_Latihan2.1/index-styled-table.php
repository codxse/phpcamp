<?php
	if (isset($_POST['klikTombol'])) {
?>

<h3>Daftar Harga BBM</h3>
<table class="table table-striped table-hover table-bordered">
	<thead>
		<tr>
			<th scope="col">#</th>
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
?>		</tr>
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
		$temp = $literAwal;

		for ($i=$literAwal;$i<=$literAkhir;$i++) {
			if ((!isset($_POST['bensinChecked'])) &&
				(!isset($_POST['solarChecked'])) &&
				(!isset($_POST['pertamaxChecked']))
			   ) {

				if ($i==$temp) 
					echo '<h4 style="color:#FF0000;">Belum memilih jenis BBM!</h4>';

			} else {

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

<?php
	}
?> 
