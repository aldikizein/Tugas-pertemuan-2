<?php

//Aldiki Farhan Zein, Backend, Sistem Informasi 2021

//nomor 1
$hari = array("senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu");

var_dump($hari);

echo "<br>";
echo "<br>";

//nomor 2
$bulan = array("januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "oktober", "november", "desember");
var_dump($bulan);

echo "<br>";
echo "<br>";

//nomor 3
$jumlah = count($bulan);
var_dump($jumlah);
echo "<br>";

$hasil = $jumlah**18;

if ($hasil % 2 == 0){
    echo "jumlah bulan dikali umur merupakan angka genap";}
else {
    echo "jumlah bulan dikali umur merupakan angka ganjil" ;}
    
