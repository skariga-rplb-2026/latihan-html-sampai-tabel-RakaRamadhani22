<?php
    $data = [
        ["nama" => "Siti", "kursus" => "MySql", "bayar" => "1000000"],
        ["nama" => "Iwan", "kursus" => "HTML", "bayar" => "1000000"],
        ["nama" => "Zharif", "kursus" => "PHP", "bayar" => "1000000"],
        ["nama" => "Asep", "kursus" => "HTML", "bayar" => "1000000"],
        ["nama" => "Siti", "kursus" => "HTML", "bayar" => "1000000"],
    ];

    
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Pilih Kursus :
    <select name="" id="">
        <option value="HTML">HTML</option>
        <option value="MySql">MySql</option>
        <option value="PHP">PHP</option>
    </select>
    <table width="400" border="1">
        <tr>
            <th>Nama</th>
            <th>Kursus</th>
            <th>Bayar</th>
        </tr>
        <?php
            foreach($data as $d){
                echo "<tr>";
                echo "<td>".$d["nama"]."</td>";
                echo "<td>".$d["kursus"]."</td>";
                echo "<td>".$d["bayar"]."</td>";
                echo "</tr>";
            }
        ?>    
    </table>
</body>
</html>