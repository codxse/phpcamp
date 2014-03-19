<html>
<head>
	<title>Form Penjualan (Latihan 2)</title>
</head>
<body>
<form method="POST" action="hasil_jual.php">
	<table>
		<tr>
			<th colspan="2">PENJUALAN</th>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>
				<input type="text" name="nama-barang" size="27" />
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>
				<input type="text" name="harga" size="27" />
			</td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td>
				<input type="text" name="quantity" size"27" />
			</td>
		</tr>
		<tr>
			<td valign="center">Status</td>
			<td>
				<input type="radio" name="status" value="Pelanggan" />Pelanggan<br />
				<input type="radio" name="status" value="Bukan Pelanggan" />Bukan Pelanggan<br />
			</td>
		</tr>
		<tr>
			<td>Kota</td>
			<td>
				<select name="kota" required>
					<option value="Jakarta">Jakarta</option>
					<option value="Bandung">Bandung</option>
					<option value="Surabaya">Surabaya</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Hitung" />
				<input type="reset" value="Reset" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>