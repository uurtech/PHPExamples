<?php

$sonuclar = array(); //yazi ve tura olarak ekleyerek gidicez.
$dogru_sayac = 0;
$yaziTura = rand(0,1);

echo "Yazi mi Turami ? yazi/tura : ";

$devam = true;

while($devam){

	$girdi = trim(fgets(STDIN));
	switch ($girdi) {
		case 'yazi':
			if($yaziTura == 1){
				$dogru_sayac++;
			}
			break;
		case 'tura':
			if($yaziTura == 0){
				$dogru_sayac++;
			}
		break;
		default:
			echo "yazi ya da tura yazacaktın. Programi iptal ediyorum.";
			die();
			break;
	}
	array_push($sonuclar, $yaziTura);




	echo "Tekrar oynamak için e'ye, sonuçları görmek için s'ye çıkmak için her hangi bir karaktere basınız.";
	$cmd = trim(fgets(STDIN));
	$devam = false;
	if($cmd == "e"){
		$devam = true;
	}else if($cmd == "s"){
		echo "Toplam da " . $dogru_sayac ." kere bildiniz.\n";
		$sayac = array_count_values($sonuclar);
		echo "Yazi Sayisi : " . $sayac[1] ."\n" . "Tura Sayısı : " . $sayac[0] ."\n";
	}
}

?>