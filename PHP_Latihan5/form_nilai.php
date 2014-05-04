<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Form Nilai</title>
</head>

<body>
<form action="hitungnilai.php" method="post">
<table border="1">
  <tr>
    <td colspan="2" align="center">Perhitungan Nilai</td>
  </tr>
  <tr>
    <td>NIM</td>
    <td><input name="nim" type="text" size="9" maxlength="8" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input name="nama" type="text" size="25" maxlength="30" /></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><select name="tanggal">
			<option value=0>Pilih</option>
			<?php
				for($tgl=1;$tgl<=31;$tgl++){
					echo "<option value=$tgl>$tgl</option>";
				}
			?>
		</select>
		-
		<select name="bulan">
			<option value=0>Pilih</option>
			<option value=1>Januari</option>
			<option value=2>Pebruari</option>
			<option value=3>Maret</option>
			<option value=4>April</option>
			<option value=5>Mei</option>
			<option value=6>Juni</option>
			<option value=7>Juli</option>
			<option value=8>Agustus</option>
			<option value=9>September</option>
			<option value=10>Oktober</option>
			<option value=11>Nopember</option>
			<option value=12>Desember</option>
		</select>
		-
		<select name="tahun">
			<option value=0>Pilih</option>
			<?php
				for($thn=2000;$thn>=1950;$thn--)
					echo "<option>$thn</option>";
			?>
		</select>
	</td>
  </tr>
  <tr>
    <td colspan="2" align="center">Nilai</td>
  </tr>
  <tr>
    <td>Tugas</td>
    <td><input name="tugas" type="text" size="4" maxlength="3" /></td>
  </tr>
  <tr>
    <td>UTS</td>
    <td><input name="uts" type="text" size="4" maxlength="3" /></td>
  </tr>
  <tr>
    <td>UAS</td>
    <td><input name="uas" type="text" size="4" maxlength="3" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="submit" type="submit" value="Hitung" /></td>
  </tr>
</table>

</form>
</body>
</html>
