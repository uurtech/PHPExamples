<?php

//ödenecek hesap random verilecek (float/double şeklinde)
$ucret = rand(100,1000) / 10;

//100 ile 1000 arasında bir sayı alıp 10'a bölüyoruz ki, 150.7 gibi bir rakam gelebilsin.
//100 ile 1000 arasında bir rakam veri 100'e bölersek 15.07 gibi bir rakam alırız.
echo "İşlem Ücreti : " . $ucret;

echo "\nLütfen cebinizdeki parayı giriniz :) ";
$alinanUcret = (double)trim(fgets(STDIN));

if(($alinanUcret - $ucret) < 0){
	echo "Paranız yetmiyor !!!";
	exit;
	//burada istersek kalan para miktarını talep edebiliriz.
}

$paraUstu = $alinanUcret - $ucret;

echo $paraUstu;

?>