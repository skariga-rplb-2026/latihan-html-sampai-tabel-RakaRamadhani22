<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Proses</title>
</head>
<body>
    File Proses <hr/>
    <?php
    $jurusan = $_POST["jurusan"] ;

    switch ($jurusan) {
      case "TI":  
        echo "Jurusan Anda Teknik Informatika <br/>";
        break;
      case "SI":
        echo "Jurusan Anda Sistem Informasi <br/>";
        break;
      case "MI":
        echo "Jurusan Anda Manajemen Informatika <br/>";
        break;
      case "TK":
        echo "Jurusan Anda Teknik Komputer <br/>";
        break;
      case "KA":
        echo "Jurusan Anda Komputerisasi Akuntansi <br/>";
        break;
      default :
        echo "Jurusan Tidak Ada <br/>";  
    }

    $nilai = $_POST["angka"] ;
    echo "Nilai Anda = " . $nilai . "<br/>" ;

    if($nilai > 100){
        echo "Nilai Kelebihan";
    }else if($nilai > 75){
        echo "Selamat Anda Lulus Ujian";
    }else if($nilai >= 40){
        echo "Anda Harus Ujian Lagi";
    }else {
        echo "Maaf, Gagal";
    }
    ?>
</body>
</html>