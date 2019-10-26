<?php 
function cetak_gambar($angka) {

	for ($i=0; $i < $angka; $i++) { 
		$gambar = "";
		if ($i%2 == 0) {
			for ($j=0; $j < $angka; $j++) { 
				$gambar .= " * &nbsp;";
			}
		}
		else{
			for ($k=0; $k < $angka; $k++) { 
				if ($k == 0 || $k == $angka-1) {
					$gambar .= " * &nbsp;";
				}
				else{
					$gambar .= " = &nbsp;";
				}
			}
		}
		echo $gambar."</br>";
	}
}
cetak_gambar(5);
 ?>