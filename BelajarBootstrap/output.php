<?php
    $nama = $_POST["nama"];
    $jenis = $_POST["jenis"];
    $seri = $_POST["seri"];
    $merk = $_POST["merk"];
    $nege = $_POST["negara"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $tgl = $_POST["tgl"];
    $bulan = $_POST["bulan"];
    $tahun = $_POST["tahun"];

    $kode_barang = [
        $jenis,
        str_pad($seri, 6, "0", STR_PAD_LEFT),
        substr($merk, 0, 3),
        substr($nege, 0, 3)
    ];

    $kode_barang = implode("/", $kode_barang);
    $tanggal_pembuatan = date("l, d F Y", strtotime("$tahun - $bulan - $tgl"));
    $total = $harga * $stok;
?>    

<body>
    <h1>Data Barang</h1>
    <table>
        <tr>
            <td>kode</td>
            <td>:</td>
            <td><?php echo $kode_barang; ?> </td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><?php echo strtoupper($nama); ?> </td>
        </tr>
        <tr>
            <td>Nomor Seri</td>
            <td>:</td>
            <td><?php echo $seri ?> </td>
        </tr>
        <tr>
            <td>Merk</td>
            <td>:</td>
            <td><?php echo ucfirst($merk); ?> </td>
        </tr>
        <tr>
            <td>Buatan Dari</td>
            <td>:</td>
            <td><?php echo ucfirst($nege); ?> </td>
        </tr>
        <tr>
            <td>Tanggal Buat</td>
            <td>:</td>
            <td><?php echo $tanggal_pembuatan; ?> </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><?php echo number_format($harga, 2,',','.'); ?> </td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><?php echo $stok; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo number_format($total, 2, ',', '.'); ?></td>
        </tr>
    </table>
</body>