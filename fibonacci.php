<?php

//Sizlere iki adet çok basit ama en akılcı yöntemi aktarıyorum,

function fibo($n){
return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
}
//PHP 5 ile birlikte artık ** olarak sqrt kullanabiliyoruz,

function fib($n){
return round(((5 ** .5 + 1) / 2) ** $n / 5 ** .5);
}
//PHP'de recursive fonksiyon ile yapmak istiyorsanız,

function fibonacci($n){
if(n == 0)
        return 0;
    else if(n == 1)
      return 1;
   else
      return fibonacci(n - 1) + fibonacci(n - 2);
}
//Fibonacci Serisi ile ilgili daha detaylı ve akıllı bilgi öğrenmek istiyorsanız ( ki istemiyorsanız bırakın bilişimi ) 
//https://en.wikipedia.org/wiki/Fibonacci_number#Computation_by_rounding adresini ziyaret edin.

?>