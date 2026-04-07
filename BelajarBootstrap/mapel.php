<?php
    $data = [
        ["nama" => "Rina", "mapel" => "Matematika", "nilai" => "90", "grade" => "A"],
        ["nama" => "Budi", "mapel" => "Informatika", "nilai" => "75", "grade" => "C"],
        ["nama" => "Salsa", "mapel" => "Matematika", "nilai" => "85", "grade" => "B"],
        ["nama" => "Doni", "mapel" => "Bahasa Ingrris", "nilai" => "70", "grade" => "C"],
        ["nama" => "Rudi", "mapel" => "Informatika", "nilai" => "95", "grade" => "A"],
        ["nama" => "Lina", "mapel" => "Bahasa Inggris", "nilai" => "88", "grade" => "B"],
    ];

    function getGrade($nilai){
        if($nilai >= 90) return "A";
        elseif($nilai >= 80) return "B";
        elseif($nilai >= 70) return "C";
        else return "D";
    }

    function getWarna($grade){
        switch ($grade){
            case "A": return "green";
            case "B": return "yellow";
            case "C": return "red";
            default: return "grey";
        }
    }
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Mata Pelajaran</title>
    <style>
        .green {background: #90EE90; }
        .yellow {background: #FFF498; }
        .red {background: #FFCCCB; }
    </style>
</head>
<body>
    <b>Filter Mata Pelajaran :</b>
    <form action="" method="GET">
        <?php
            if (isset($_GET['mapel'])){
                $filter = $_GET['mapel'];
            }else{
                $filter = "semua";
            }
        ?>    
        <select name="mapel" id="" onchange="this.form.submit()">
            <option value="" <?php echo ($filter=="semua" || $filter=="")? "selected" : ""; ?> >Semua </option>
            <option value="Matematika" <?php echo ($filter=="Matematika")? "selected" : ""; ?> >Matematika</option>
            <option value="Informatika"<?php echo ($filter=="Informatika")? "selected" : ""; ?> >Informatika</option>
            <option value="Bahasa Inggris" <?php echo ($filter=="Bahasa Inggris")? "selected" : ""; ?> >Bahasa Inggris</option>
        </select>
    </form>
    <table width="400" border="1">
        <tr>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <?php

            $datatampil = [];
            if(isset($_GET['mapel'])){
                $filter = $_GET['mapel'];
                if($filter == ""){
                    $datatampil= $data;
                }else{
                    foreach($data as $d){
                        if($d["mapel"] == $filter){
                            $datatampil[] = $d;
                        }
                    }
                }
            }else{
                $datatampil= $data;
            }
            foreach($datatampil as $d){
                $grade = getGrade($d['nilai']);
                $warna = getWarna($grade);

                echo "<tr class='$warna'>";
                echo "<td>".$d["nama"]."</td>";
                echo "<td>".$d["mapel"]."</td>";
                echo "<td>".$d["nilai"]."</td>";
                echo "<td>".$grade."</td>";
                echo "</tr>";
            }
        ?>  
        <tr>
             <th colspan="4" align="left">
                 <?php
                     $total = 0;
                     $avg = 0;
                     $n = 0;
                     foreach ($data as $d){
                         $total+=$d["nilai"];
                         $n++;
                     }
                     $avg = $total / $n;
                     echo "Rata-rata Nilai: ".$avg;
                     ?>
             </th>
        </tr>          
    </table>
</body>
</html>