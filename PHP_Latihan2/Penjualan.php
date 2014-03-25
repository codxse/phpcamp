<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1 Pertemuan 2 PHP</title>
</head>
<body>
	<form action="Penjualan.php" method="POST">
	<table border="1">
		<thead>
			<tr>
				<th scope="col" colspan="2">PENJUALAN</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nama Barang</td>
				<td>
					<input type="text" size="30" name="barang" />
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>
					<input type="text" size="30" name="harga" />
				</td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td>
					<input type="text" size="30" name="qty" />
				</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<input type="radio" name="status" value="Pelanggan" id="Pelanggan" />
						<label for="Pelanggan">Pelanggan</label><br />
					<input type="radio" name="status" value="Bukan Pelanggan" id="bPelanggan" />
						<label for="bPelanggan">Bukan Pelanggan</label>
				</td>
			</tr>
			<tr>
				<td>Kota</td>
				<td>
					<select>
						<option name="kota" value="Jakarta">Jakarta</option>
						<option name="kota" value="Bandung">Bandung</option>
						<option name="kota" value="Surabaya">Surabaya</option>
					</select>
				</td>
			</tr>
		</tbody>
	</table>
	</form>

<!-- THE CODE GOES HERE -->
<?php
	$barang = $_POST['barang'];
	$harga = $_POST['harga'];
	$qty = $_POST['qty'];
	$status = $_POST['status'];
	$kota = $_POST['kota'];
	$disc = 0;

	if ($kota=='Jakarta') {
		$cost = 10000;
	} else if ($kota=='Bandung') {
		$cost = 20000;
	} else {
		$cost = 30000;
	}

	if ($status=='Pelanggan') {
		$disc = 0.1 * $cost; 
	} 

	$subtotal = $harga * $qty;
	$total = $subtotal + $cost - $disc;
?>

	<table border="1">
		<thead>
			<tr>
				<th colspan="2">HASIL PERHITUNGAN</th>
			</tr>
		</thead>
		</tbody>
			<tr>
				<td>Nama Barang</td>
				<td><?php echo $barang; ?></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><?php echo $harga; ?></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><?php echo $qty; ?></td>
			</tr>
			<tr>
				<td>Subtotal</td>
				<td>Rp. <?php echo $subtotal; ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><?php echo $status; ?></td>
			</tr>
			<tr>
				<td>Diskon</td>
				<td><?php echo $disc; ?></td>
			</tr>
			<tr>
				<td>Ongkos Kirim</td>
				<td>Rp. <?php $cost . ' (' . $kota . ')'; ?></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td>Total</td>
				<td>Rp. <?php echo $total; ?></td>
			</tr>
		</tfoot>
	</table>
</body>
</html>

