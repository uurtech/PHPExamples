<?php

$ebat = "gocuman";
$yeni_dizi = array("cilgin"  => "seni",
              "ebat" => "gocuman",
              "sarkici" => "ajdar");
extract($yeni_dizi, EXTR_PREFIX_SAME, "on_ek");

echo "$cilgin, $ebat, $sarkici, $on_ek_ebat\n";

?>