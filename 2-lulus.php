<?php 
function hitungKembalian($totalBelanja, $uang) {
	
	$kembalian = $uang - $totalBelanja;
	if ($totalBelanja >= 200000) {
		$cashback = $totalBelanja * 10 / 100;
		$kembalian = $uang - $totalBelanja + $cashback;
	}
	$nilai = 0;

	while ($kembalian >= 5000) {
		$nilai = 0;
		if ($kembalian >= 50000) {
			while ($kembalian >= 50000) {
				$nilai += 1;
				$kembalian = $kembalian - 50000;
			}
			echo $nilai." x 50000 </br>";
		}
		elseif ($kembalian >= 20000) {
			while ($kembalian >= 20000) {
				$nilai += 1;
				$kembalian -= 20000;
			}
			echo $nilai." x 20000</br>";
		}
		elseif ($kembalian >= 10000) {
			while ($kembalian >= 10000) {
				$nilai += 1;
				$kembalian -= 10000;
			}
			echo $nilai." x 10000</br>";
		}
		elseif ($kembalian >= 5000) {
			while ($kembalian >= 5000) {
				$nilai += 1;
				$kembalian -= 5000;
			}
			echo $nilai." x 5000</br>";
		}
	}
	echo $kembalian." Disumbangkan karena tidak ada kembalian dibawah 5000";
}

hitungKembalian(220000, 250000);

?>