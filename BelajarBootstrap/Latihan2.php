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
        $a = 20;
        $b = 5;
        $c = $a * $b;
        $d = $c / $b;
        $e = $d-$b;
        echo "$c \t $d \t $e"; echo "<br />";
        //contoh penggunaan .
        $a = "Malang ";
        $a = $a."Kotaku"; echo "$a <br />";
        //contoh penggunaan .=
        $b = "SKARIGA";
        $b .= "Sekolahku"; echo "$b";
    ?> 
</body>
</html>