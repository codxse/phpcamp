<?php
	// get all variable from the form_jual.php
	$nama = $_POST['nama-barang'];
	$harga = $_POST['harga'];
	$quantity = $_POST['quantity'];
	$status = $_POST['status'];
	$kota = $_POST['kota'];

	// the func
	function diskon($h, $q, $s) {
		$subtotal = $h * $q;

		if ($s == 'Pelanggan') {
			$diskon = $subtotal * 0.1;
		} else {
			$diskon = 0;
		}

		return $diskon;
	}

	function getOngkos($k) {
		if ($k == 'Bandung') {
			$ongkos = 10000;
		} elseif ($k == 'Jakarta') {
			$ongkos = 20000;
		} else {
			$ongkos = 30000;
		}
		return $ongkos;
	}

	$subtotal = $harga * $quantity;
	$d = diskon($harga, $quantity, $status);
	$o = getOngkos($kota);
	$total = $subtotal + $o - $d;
?>
