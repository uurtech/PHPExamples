<?php

//pi sayisinda noktadan sonrası n. rakamı bulmak

echo "Lütfen Kaçıncı rakamı istediğinizi belirtin ";

$nth = (int)stream_get_line(STDIN, 1024, PHP_EOL);

$pi_number = (string)M_PI;


//noktadan öncesi ve sonrasını bir diziye atıyoruz
$pi_explode = explode(".",$pi_number);

$pi_exploded_chars = str_split($pi_explode[1]);

echo $pi_exploded_chars[$nth-1];

?>