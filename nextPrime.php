<?php


$secim = true;

do{
	//eğer trimlemez isek \n de alındığı için ctype_digit false dönecek.
	$f = trim(fgets(STDIN));
	if(ctype_digit($f)){
		$asal = gmp_nextprime((int)$f);
		echo gmp_strval($asal);
		echo "\n";
		echo "Want to continue ? : Y/N";
		if(trim(fgets(STDIN)) == "n"){
			$secim = false;
		}
	}
	$secim = false;
	//gmp_nextprime(int($f));
}while($secim);


?>