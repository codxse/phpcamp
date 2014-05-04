<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hasil Nilai</title>
</head>
<body>
<?php
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$tanggal=$_POST["tanggal"];
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$nim=$_POST["nim"];
$tugas=$_POST["tugas"];
$uts=$_POST["uts"];
$uas=$_POST["uas"];

$ada_error=false;
$pesan_error="Kesalahan yang terjadi: </ br>";

$nim=trim($nim);

if(strlen($nim)<8) {
	$pesan_error=$pesan_error." Panjang NIM harus 8 karakter<br/>";
	$ada_error=true;
}

if(!ereg("[0-9]{8}",$nim)){
	$pesan_error .= " NIM hanya boleh angka<br />";
	$ada_error=true;
}

$jenjang=substr($nim,0,3);
if(($jenjang!="101") and ($jenjang!="107") and ($jenjang!="122")) {
	$pesan_error = $pesan_error." 3 Huruf pertama untuk IF harus 101 [s1], 107 [D3], 122 [D1]<br />";
	$ada_error=true;
}

$nim=trim($nama);
if(strlen($nama)<2){
	$pesan_error = $pesan_error . " Nama minimal 2 karakter<br />";
	$ada_error=true;
}

if(($tanggal==0)or($bulan==0)or($tahun==0)){
	$pesan_error .= " Tanggal lahir harus diisi lengkap<br />";
	$ada_error=true;
}

if(!checkdate($bulan,$tanggal,$tahun)) { // if checkdate == false
	$pesan_error .= " Tanggal lahir tidak sah<br />";
	$ada_error=true;
}

if(!ereg("[0-9]{1,3}",$tugas)) {
	$pesan_error .= " Nilai tugas hanya boleh angka<br />";
	$ada_error=true;
}

if(($tugas<0) || ($tugas>100)) {
	$pesan_error .= " Nilai tugas harus 0 s/d 100<br />";
	$ada_error=true;
}

if(!ereg("[0-9]{1,3}",$uts)) {
	$pesan_error .= " Nilai UTS hanya boleh angka<br />";
	$ada_error=true;
}

if(($uts<0) || ($uts>100)) {
	$pesan_error .= " Nilai UTS harus 0 s/d 100<br />";
	$ada_error=true;
}

if(!ereg("[0-9]{1,3}",$uas)) {
	$pesan_error .= " Nilai UAS hanya boleh angka<br />";
	$ada_error=true;
}

if(($uas<0) || ($uas>100)) {
	$pesan_error .= " Nilai UAS harus 0 s/d 100<br />";
	$ada_error=true;
}

if($ada_error) { // $ada_error == true
	echo "Proses perhitungan dibatalkan. Data yang Anda isikan tidak valid.<br>
			$pesan_error</br>
			<a href='javascript:history.back();'>Kembali</a><br />";
} else if(!ada_error) {
?>
	<table border="1">
	<tr>
		<td colspan="2" align="center" bgcolor="#333333">Perhitungan Nilai</td>
	</tr>
	<tr>
		<td>NIM</td>
		<td><?php echo $nim; ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo $nama; ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><?php echo "$tanggal - $bulan - $tahun"; ?></td>
	</tr>
	<tr>
		<td colspan=2 align="center" bgcolor="#333333">Nilai</td>
	</tr>
	<tr>
		<td>Tugas</td>
		<td><?php echo number_format($tugas, 2); ?></td>
	</tr>
	<tr>
		<td>UTS</td>
		<td><?php echo number_format($uts, 2); ?></td>
	</tr>
	<tr>
		<td>UAS</td>
		<td><?php echo number_format($uas, 2); ?></td>
	</tr>
	<tr>
		<td>Nilai Akhit</td>
		<td><?php 
			$na = 0.2 * $tugas + 0.3 * $uts + 0.5 * $uas;
			echo number_format($na, 2);
		?></td>
	</tr>
</table>
<?php
} // end if (!$ada_error)
?>
</body>
</html>