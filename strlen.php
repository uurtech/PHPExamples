<?php

//strlen('ç');

echo strlen('ö') ." \n";

//çıktı 2 olacaktır

echo mb_strlen('ö');

//çıktı 1 olacaktır.

//mantıklı olan ise decode etmek
$length = strlen(utf8_decode($s));
//burada karakterleri ? işaretine çevirir ve asıl amaç saymak olduğu için işine yaracaktır.