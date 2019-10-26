<?php 
function check($dataKey, $word){
	$jmlArrayDataKey = count($dataKey);
	$jmlKarakterWord = strlen($word);
	$arrayWord = [];

	for($i = 0; $i < $jmlKarakterWord; $i++){
		$karakter = substr($word, $i, 1);
		array_push($arrayWord, $karakter);
	} 

	for ($j=0; $j < $jmlArrayDataKey; $j++) { 
		$kata = "";
		for ($k=0; $k < strlen($dataKey[$j]); $k++) { 
			$getKata = array_splice($arrayWord, 0, 1);
			if($getKata != null){
				$kata .= $getKata[0];
			}
			if($getKata == null){
				$kata = "false";
			}
		}
	
		echo $dataKey[$j]. " ==> ".$kata."<br>";
	}
}

$array = ['dumb', 'wasy', 'the', 'best'];
$kata = "dumbways";
check($array, $kata);
 ?>