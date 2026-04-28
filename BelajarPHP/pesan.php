<?php
function judul()
{
    echo "<h2>Praktikum Pemrograman Web!</h2>";
}
function garis()
{
    echo "<br/>===================================<br/>";
}
function siswa($nis, $nama, $semester)
{
    echo "NIS : $nis <br/>";
    echo "Nama : $nama <br/>";
    echo "Semester : $semester <br/>";
}

judul();
garis();

siswa("25981", "Dede Raka Ramadhani Satria Pratama", 2);
garis();
siswa("26005", "Muhammad Ridwan", 2);
garis();
siswa("25678", "Darel Vino Bening", 2);
garis();
siswa("25345", "Prayoga Husnul Khitam", 2);
garis();
siswa("25879", "Yonatan Samuel Putra Willy", 2);
garis();
?>