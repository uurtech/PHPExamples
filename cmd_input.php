<?php

//PHP ile komut satırından veri almak için bir kaç yöntemimiz mevcut,

//kullanıcıdan 3 adet input alır
for ($i=0; $i < 3; $i++) {
        $line = readline("Command: ");
        readline_add_history($line);
}

//dump history
print_r(readline_list_history());

//dump variables
print_r(readline_info());
//şimdi bunda sorun yok eğer bir topluluk veya platform bağımsız iş yapıyorsanız sorun haline geliyor, kısaca winNT üzerinde çalışmayacaktır readline() bunun için ise ;

//stream_get_line'ı kullanıyoruz,

if (PHP_OS == 'WINNT') {
  echo '$ ';
  $line = stream_get_line(STDIN, 1024, PHP_EOL);
} else {
  $line = readline('$ ');
}
//Gördüğünüz gibi PHP_OS sabit bir değişken. Bazı durumlarda hızlıca alıp işlem yapmak isteyebilirsiniz, bunun için de fgets hemen imdadınıza yetişiyor, bir parametre göndererek işinizi halledebiliyorsunuz.

$var = fgets( STDIN );
//fopen da yine parametre ile kullanıcıdan girdi almak için işimize yarıyor.

$handle = fopen ("php://stdin","r");
$line = fgets($handle);
//Bir de scripti direk çalıştırırken parametre göndermek yani, php dosyaadi.php "değişkenim burada" diye çalıştırdığınızda argümanlara erişmek. Bu da çok kolay çünkü PHP sizler için bunu otomatik yapıyor, $argv değişkeni php tarafından tutulur ve var_dump ile baktığınızda size komut satırından girilenleri bir dizi halinde size sunar. Örneğin,

/*
array(4) {
  [0]=>
  string(10) "dosya.php"
  [1]=>
  string(4) "argüman1"
  [2]=>
  string(4) "argüman2"
}
*/

?>