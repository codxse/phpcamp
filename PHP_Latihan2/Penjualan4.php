<!DOCTYPE html>
<html>
<head>
	<title>Latihan 4 Pertemuan 2 PHP</title>
</head>
<body>
	<form action="Penjualan4.php" method="POST">
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
					<input type="text" size="30" name="barang" value="<?php if (isset($_POST['klik_hitung'])) echo $barang; ?>" />
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>
					<input type="text" size="30" name="harga" value="<?php if (isset($_POST['klik_hitung'])) echo $harga; ?>"/>
				</td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td>
					<input type="text" size="30" name="qty" value="<?php if (isset($_POST['klik_hitung'])) echo $qty; ?>"/>
				</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<input type="radio" name="status" value="Pelanggan" <?php if (isset($_POST['klik_hitung']) && $_POST['status']=='Pelanggan') echo ' checked="checked"'; ?> id="Pelanggan" />
						<label for="Pelanggan">Pelanggan</label><br />
					<input type="radio" name="status" value="Bukan Pelanggan" <?php if (isset($_POST['klik_hitung']) && $_POST['status']=='Bukan Pelanggan') echo ' checked="checked"'; ?> id="bPelanggan" />
						<label for="bPelanggan">Bukan Pelanggan</label>
				</td>
			</tr>
			<tr>
				<td>Kota</td>
				<td>
					<select name="kota">
						<option value="Jakarta" <?php if (isset($_POST['klik_hitung']) && $_POST['kota']=='Jakarta') echo ' selected="selected"'; ?>>Jakarta</option>
						<option value="Bandung" <?php if (isset($_POST['klik_hitung']) && $_POST['kota']=='Bandung') echo ' selected="selected"'; ?>>Bandung</option>
						<option value="Surabaya" <?php if (isset($_POST['klik_hitung']) && $_POST['kota']=='Surabaya') echo ' selected="selected"'; ?>>Surabaya</option>
					</select>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="klik_hitung" value="Hitung" />
					<input type="reset" value="Reset" />
				</td>
			</tr>
		</tfoot>
	</table>
	</form>

<!-- THE CODE GOES HERE -->
<?php
	if (isset($_POST['klik_hitung'])) {

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
<br />
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
				<td>Rp. <?php echo number_format($harga,0,",","."); ?></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><?php echo $qty; ?></td>
			</tr>
			<tr>
				<td>Subtotal</td>
				<td>Rp. <?php echo number_format($subtotal,0,",","."); ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><?php echo $status; ?></td>
			</tr>
			<tr>
				<td>Diskon</td>
				<td>Rp. <?php echo number_format($disc,0,",","."); ?></td>
			</tr>
			<tr>
				<td>Ongkos Kirim</td>
				<td>Rp. <?php echo number_format($cost,0,",",".") . ' (' . $kota . ')'; ?></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td>Total</td>
				<td>Rp. <?php echo number_format($total,0,",","."); ?></td>
			</tr>
		</tfoot>
	</table>
<?php 
	} ?>
</body>
</html>

