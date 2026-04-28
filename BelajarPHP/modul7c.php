<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Peserta</title>
</head>
<body>
    <h2>Registrasi Peserta Kursus</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email" size="30"></td>
            </tr>
            <tr>
                <td valign="top">Nama Kursus:</td>
                <td>
                    <input type="checkbox" name="kursus[]" value="C#|1000000"> C# (biaya Rp.1.000.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="JavaScript|500000"> JavaScript (biaya Rp.500.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="Perl|800000"> Perl (biaya Rp.800.000,-)<br>
                    <input type="checkbox" name="kursus[]" value="PHP|1100000"> PHP (biaya Rp.1.100.000,-)<br>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <hr>
<fieldset>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $kursus_dipilih = isset($_POST['kursus']) ? $_POST['kursus'] : [];
        
        $errors = [];

        // --- 1. Validasi ---
        if (empty($nama)) {
            $errors[] = "Nama tidak boleh kosong.";
        }
        if (empty($email)) {
            $errors[] = "Email tidak boleh kosong.";
        }
        if (empty($kursus_dipilih)) {
            $errors[] = "Pilih minimal satu kursus.";
        }

        // --- 2. Tampilkan Hasil Jika Valid ---
        if (empty($errors)) {
            $total_biaya = 0;
            $daftar_kursus = [];

            // Memproses setiap item yang dipilih
            foreach ($kursus_dipilih as $item) {
                // Memisahkan nama kursus dan harga menggunakan explode
                $data = explode('|', $item);
                $nama_kursus = $data[0];
                $harga_kursus = (int)$data[1];

                $daftar_kursus[] = $nama_kursus;
                $total_biaya += $harga_kursus;
            }

            echo "Terimakasih data anda telah diterima.<br>";
            echo "Kursus yang anda pilih sebanyak " . count($daftar_kursus) . " buah yaitu:<br>";
            echo "<ul>";
            foreach ($daftar_kursus as $k) {
                echo "<li>$k</li>";
            }
            echo "</ul>";
            echo "Biaya kursus sebesar <b>Rp. " . number_format($total_biaya, 0, ',', '.') . ",-</b>";
        } else {
            // Tampilkan error jika validasi gagal
            echo "<div style='color:red;'>";
            foreach ($errors as $error) {
                echo "• $error<br>";
            }
            echo "</div>";
        }
    }
    ?>
</fieldset>
</body>    
</html>