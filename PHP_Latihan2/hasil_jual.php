<html>
<head>
	<title>Hasil Penjualan (Latihan 2)</title>
</head>
<body>
<?php
	include_once 'func_hitung.php';
?>
<table>
	<tr>
		<td colspan="2">HASIL PERHITUNGAN</td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td><?php echo $nama; ?></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td>Rp. <?php echo $harga; ?></td>
	</tr>
	<tr>
		<td>Quantity</td>
		<td><?php echo $quantity; ?></td>
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
		<td><?php echo $d; ?></td>
	</tr>
	<tr>
		<td>Ongkos Kirim</td>
		<td>Rp <?php echo $o . ' (' . $kota . ')'; ?></td>
	</tr>
	<tr>
		<td>Total</td>
		<td>Rp. <?php echo $total; ?></td>
	</tr>	
</table>
</body>
</html>