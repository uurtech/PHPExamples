<?php

//birim metrekare fiyatı alın
echo "Lütfen Birim Fiyat Giriniz\n";
$birim_fiyat = sayiAl();
echo "Lütfen Genişlik Giriniz (metre)\n";
$genislik = sayiAl();
echo "Lütfen Uzunluk Giriniz (metre)\n";
$uzunluk = sayiAl();

echo $uzunluk * $genislik * $birim_fiyat;

function sayiAl(){
	return trim(fgets(STDIN));
}

?>