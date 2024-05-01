<?php 

require  "Model/Ayam.php"; //require unggas
require  "Model/Burung.php"; // require unggas
require  "Model/Capung.php";

$ayam = new Ayam();
$burung = new Burung();
$capung = new Capung();

$ayam->bertelur();
echo "<br>";
$burung->bertelur();
echo "<br>";
$burung->Terbang();
echo "<br>";
$capung->Terbang()
?>