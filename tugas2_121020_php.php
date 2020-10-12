<?php

$nama = "hasan habsyi";
$angka = rand(1,100);
$kata = explode(" ", $nama);

echo $kata[0].$angka.$kata[(count($kata)-1)];

 ?>
