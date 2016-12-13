<?php

$fp = FSOCKOPEN("time-a.nist.gov", 37); 
IF ($fp) { 
FPUTS($fp, "\n"); 
$timevalue = FREAD($fp, 49); 
FCLOSE($fp); 
} 
 
$atomic_time = (ABS(HEXDEC('7fffffff') - HEXDEC(BIN2HEX($timevalue)) - HEXDEC('7fffffff')) - 2208988800); 
ECHO $atomic_time; 
 

 ?>