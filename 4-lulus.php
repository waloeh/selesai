<?php 
function hitungVoucher($tipe_discount, $uang_belanja) {
	switch ($tipe_discount) {
		case 'DumbWaysAsik':
			if ($uang_belanja >= 20000) {
				$discount = $uang_belanja * 50 /100;
				if ($discount > 20000) {
					$discount = 20000;
				}
				$bayar = $uang_belanja - $discount;
				$kembalian = $uang_belanja - $bayar;
			}
			else {
				$discount = 0;
				$bayar = $uang_belanja;
				$kembalian = $uang_belanja - $bayar;
			}
			break;
		
		case 'DumbWaysMantap':
			if ($uang_belanja >= 50000) {
				$discount = $uang_belanja * 30 /100;
				if ($discount > 40000) {
					$discount = 40000;
				}
				$bayar = $uang_belanja - $discount;
				$kembalian = $uang_belanja - $bayar;
			}
			else {
				$discount = 0;
				$bayar = $uang_belanja - $discount;
				$kembalian = $uang_belanja - $bayar;
			}
			break;
	}


	$hasil = "Uang yang harus dibayar => ".$bayar."</br>
			Diskon => ".$discount."</br>
			Kembalian => ".$kembalian;
	return $hasil;
}

$kodevoucer1 = "DumbWaysAsik";
$kodevoucer2 = "DumbWaysMantap";
$res = hitungVoucher($kodevoucer1, 1000000);
echo $res;

 ?>