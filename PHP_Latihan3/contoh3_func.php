<html>
<head>
	<title>Hasil Penjualan Contoh 3 Array</title>
</head>
<body>
<table border="1">
	<tr>
		<td colspan="5">
			<strong>Penjualan Barang</strong>
		</td>
	</tr>
	<tr>
		<td>No</td>
		<td>Nama Barang</td>
		<td>Harga</td>
		<td>Qty</td>
		<td>Sub Total</td>
	</tr>
	<?php
		$no = 0;
		$totalqty = 0;
		$total = 0;

		for($i=0; $i<count($nama); $i++) {
			$name = $_POST['nama'][$i];
			$cost = $_POST['harga'][$i];
			$jml = $_POST['qty'][$i];

			if ($jml!=0) {
				$no += 1;
				$totalqty += $jml;
				$total += $cost;
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $name; ?></td>
		<td>Rp. <?php echo $cost; ?>,-</td>
		<td><?php echo $jml; ?></td>
		<td>Rp. <?php echo $total; ?>,-</td>
	</tr>
	<?php
			}
		}
	?>
	<tr>
		<td colspan="3" align="right">Total</td>
		<td><?php echo $totalqty; ?></td>
		<td><?php echo $total; ?></td>
	</tr>
</table>
</body>
</html>