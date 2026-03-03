<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <?php
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $total = $harga * $jumlah;
        $diskon = 0.1 * $total; // 10% diskon
        $total_setelah_diskon = $total - $diskon;

        echo "Harga: " . $harga . "<br>";
        echo "Jumlah: " . $jumlah . "<br>";
        echo "Total: " . $total . "<br>";
        echo "Total setelah diskon 10%: " . $total_setelah_diskon;
    ?>
</body>
</html>