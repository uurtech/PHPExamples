<?php


$sayilar = array();
$devam = true;
do{
	$sayi = rand(1,49);
	if(!array_search($sayi, $sayilar)){
		array_push($sayilar, $sayi);
	}
	
	if(count($sayilar) == 6){
		$devam = false;
	}
}while($devam);

print_r($sayilar);

?>