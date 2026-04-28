<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Peserta Kursus</title>
</head>
<body>

    <h2>Registrasi Peserta Kursus</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" style="width: 200px;"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="email" style="width: 200px;"></td>
            </tr>
            <tr>
                <td>Nama Kursus</td>
                <td>
                    <input type="checkbox" name="kursus[]" value="C#|1000000"> C# (biaya Rp.1.000.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="JavaScript|500000"> JavaScript (biaya Rp.500.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="Perl|800000"> Perl (biaya Rp.800.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="PHP|1100000"> PHP (biaya Rp.1.100.000,-)<br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
                <td><input type="reset" name="reset" value="Reset"></td>
            </tr>
        </table>
    </form>

<fieldset>
<?php
if (isset($_POST['simpan'])) {
    $nama_kursus_terpilih = isset($_POST['kursus']) ? $_POST['kursus'] : [];
    $total_biaya = 0;
    $jumlah_kursus = count($nama_kursus_terpilih);

    echo "Terimakasih data anda telah diterima.<br>";
    echo "Kursus yang anda pilih sebanyak $jumlah_kursus buah yaitu:<br>";
    echo "<ul>";
    
    foreach ($nama_kursus_terpilih as $data) {
        // Memisahkan nama kursus dan harga yang dikirim dari value checkbox
        $detail = explode("|", $data);
        $nama_kursus = $detail[0];
        $harga = (int)$detail[1];

        echo "<li>$nama_kursus</li>";
        $total_biaya += $harga;
    }
    
    echo "</ul>";
    echo "Biaya kursus sebesar Rp. " . number_format($total_biaya, 0, ',', '.') . ",-";
    echo "</div>";
}
?>
</fieldset>
</body>
</html>