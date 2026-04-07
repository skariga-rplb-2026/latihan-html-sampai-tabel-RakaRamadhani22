<?php
    $data = [
        ["nama" => "Siti", "kursus" => "MySql", "bayar" => "1000000"],
        ["nama" => "Iwan", "kursus" => "HTML", "bayar" => "1000000"],
        ["nama" => "Zharif", "kursus" => "PHP", "bayar" => "1000000"],
        ["nama" => "Asep", "kursus" => "HTML", "bayar" => "1000000"],
        ["nama" => "Agus", "kursus" => "HTML", "bayar" => "1000000"],
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
    <form action="" method="GET">
        <?php
            if (isset($_GET['kursus'])){
                $filter = $_GET['kursus'];
            }else{
                $filter = "semua";
            }
        ?>    
        <select name="kursus" id="" onchange="this.form.submit()">
            <option value="" <?php echo ($filter=="semua" || $filter=="")? "selected" : ""; ?> >All </option>
            <option value="HTML" <?php echo ($filter=="HTML")? "selected" : ""; ?> >HTML</option>
            <option value="MySql"<?php echo ($filter=="MySql")? "selected" : ""; ?> >MySql</option>
            <option value="PHP" <?php echo ($filter=="PHP")? "selected" : ""; ?> >PHP</option>
        </select>
    </form>
    <table width="400" border="1">
        <tr>
            <th>Nama</th>
            <th>Kursus</th>
            <th>Bayar</th>
        </tr>
        <?php

            $datatampil = [];
            if(isset($_GET['kursus'])){
                $filter = $_GET['kursus'];
                if($filter == ""){
                    $datatampil= $data;
                }else{
                    foreach($data as $d){
                        if($d["kursus"] == $filter){
                            $datatampil[] = $d;
                        }
                    }
                }
            }else{
                $datatampil= $data;
            }
            foreach($datatampil as $d){
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