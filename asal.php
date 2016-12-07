<?php

//Girdiğiniz sayıdan büyük ilk asal sayıyı PHP'de bulmak çok basit,

gmp_nextprime($sayi);
//bu fonksiyon bir sonraki asal sayıyı döndürüyor. Yalnız gmp_nextprime() fonksiyonu 5.2'den daha büyük PHP sürümü kullanmanız gerekmektedir. 

//Bir döngü ile girilen sayıya kadar olan tüm asal sayıları yazdırmak için şu şekilde bir işlem yapabilirsiniz.

function isPrime($num) {
    if($num == 1) {
        return false;
    }

    if($num == 2) {
        return true;
    }

    if($num % 2 == 0) {
        return false;
    }

    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {

        if($num % $i == 0)

            return false;
    }
    return true;
}

for($i = 0;$i< $hedef_sayi; $i++){
if (isPrime($i)) 
{ 
echo $i ;
} else { 
//Hiç Bir Şey Yapma 
} 

}

//burası yeni bir fonksiyon

function isPrime($n){
for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
}

//Asal sayı işlemlerini gpm_nextprime() ile de yapabilirsiniz. O biraz daha kısa sanki ama bencmarklarla kapıştırmak gerekli :) 

?>