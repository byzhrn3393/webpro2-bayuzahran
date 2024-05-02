<?php

require "vendor/autoload.php";

use Calculator\Calculator;

$Toyota = new Dummy\Mobil\Toyota("Toyota Fortuner ", 10);
$calculator = new Dummy\Calculator($Toyota);
echo "Jarak Maksimum ".$Toyota->getMerk().$calculator->hitungJarak()." Km";
echo "<hr>";
$Honda = new Dummy\Mobil\Honda("Honda CRV ", 10);
$calculator = new Dummy\Calculator($Honda); 
echo "Jarak Maksimum ".$Honda->getMerk().$calculator->hitungJarak()." Km";

?>