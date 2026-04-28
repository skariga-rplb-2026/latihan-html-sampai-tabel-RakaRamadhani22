<?php
$celcius = $_POST["celcius"];

function kelvin($celcius){
    $kelvin = 273.15 + $celcius;
    return $kelvin;
}
function fahrenheit($celcius){
    $fahrenheit = 32 + (1.8 * $celcius);
    return $fahrenheit;
}
echo "<h2>Konversi Suhu Celcius ke <br>
Kelvin dan Fahrenheit</h2>";
echo "Derajat Celcius : $celcius <br>";

if(isset ($_POST["celcius"])){
    $hasil = kelvin($_POST["celcius"]);
    echo "Derajat Kelvin : $hasil <br>";
}
if(isset ($_POST["celcius"])){
    $hasil = fahrenheit($_POST["celcius"]);
    echo "Derajat Fahrenheit : $hasil";
}