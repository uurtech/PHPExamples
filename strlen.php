<?php

//strlen('ç');

echo strlen('ö') ." \n";

//çıktı 2 olacaktır

echo mb_strlen('ö');

//çıktı 1 olacaktır.