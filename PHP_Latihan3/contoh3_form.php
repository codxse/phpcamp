<html>
<head>
	<title>Form Penjualan Contoh 3 Array</title>
</head>
<body>
<form method="POST" action="contoh3_func.php">
	<table border="1">
		<th colspan="3" style="background:#ff0000; color:#fff;">
			PENJUALAN BARANG
		</th>
		<tr>
			<td><strong>Nama Barang</strong></td>
			<td><strong>Harga Satuan</strong></td>
			<td><strong>Qty</strong></td>
		</tr>
		<tr>
			<td>Buku Tulis</td>
			<td style="text-align:right;">Rp. 4.000,-</td>
			<td>
				<input type="text" size="4" name="qty[]" maxlength="4" />
				<input type="hidden" name="harga[]" value="4000" />
				<input type="hidden" name="nama[]" value="Buku Tulis" />
			</td>
		</tr>
		<tr>
			<td>Buku Gambar</td>
			<td style="text-align:right;">Rp. 5.000,-</td>
			<td>
				<input type="text" size="4" name="qty[]" maxlength="4" />
				<input type="hidden" name="harga[]" value="5000" />
				<input type="hidden" name="nama[]" value="Buku Gambar" />
			</td>
		</tr>
		<tr>
			<td>Mouse</td>
			<td style="text-align:right;">Rp. 20.000,-</td>
			<td>
				<input type="text" size="4" name="qty[]" maxlength="4" />
				<input type="hidden" name="harga[]" value="20000" />
				<input type="hidden" name="nama[]" value="Mouse" />
			</td>
		</tr>
		<tr>
			<td>Disket</td>
			<td style="text-align:right;">Rp. 2.500,-</td>
			<td>
				<input type="text" size="4" name="qty[]" maxlength="4" />
				<input type="hidden" name="harga[]" value="2500" />
				<input type="hidden" name="nama[]" value="Disket" />
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align:center">
				<input type="submit" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>