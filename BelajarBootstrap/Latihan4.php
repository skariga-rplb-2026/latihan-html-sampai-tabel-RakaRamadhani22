<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan PHP</h1>
    <?php
    $a="5";
    $b="2.5";
    $komentar="Selamat Datang ";
    echo ("Nilai variabel a adalah = $a <br>");
    //variabel bertipe integer
    echo ("Nilai variabel b adalah = $b <br>");
    //variabel bertipe real
    echo ("Nilai variabel komentar adalah = $komentar<br>");
    //variabel bertipe string
    $hasil=$a+$b;
    echo ("Hasil jumlah a dan b adalah = $hasil <br>");
    //variabel bertipe double
    $nama = "SKARIGA";
    $garis = "======================================";
    echo  "<p>";
    echo $garis."<br>";
    echo $komentar. "Di lab". $nama. "<br>Belajar  dengan giat ya. <br>";
    echo $garis."<br>";
    ?>
</body>
</html>